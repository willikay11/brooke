<?php

namespace TypiCMS\Modules\Blogs\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use TypiCMS\Modules\Core\Facades\TypiCMS;
use TypiCMS\Modules\Core\Observers\FileObserver;
use TypiCMS\Modules\Core\Observers\SlugObserver;
use TypiCMS\Modules\Core\Services\Cache\LaravelCache;
use TypiCMS\Modules\Blogs\Models\Blog;
use TypiCMS\Modules\Blogs\Models\BlogTranslation;
use TypiCMS\Modules\Blogs\Repositories\CacheDecorator;
use TypiCMS\Modules\Blogs\Repositories\EloquentBlog;

class ModuleProvider extends ServiceProvider
{
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/config.php', 'typicms.blogs'
        );

        $modules = $this->app['config']['typicms']['modules'];
        $this->app['config']->set('typicms.modules', array_merge(['blogs' => ['linkable_to_page']], $modules));

        $this->loadViewsFrom(__DIR__.'/../resources/views/', 'blogs');
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'blogs');

        $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/blogs'),
        ], 'views');
        $this->publishes([
            __DIR__.'/../database' => base_path('database'),
        ], 'migrations');

        AliasLoader::getInstance()->alias(
            'Blogs',
            'TypiCMS\Modules\Blogs\Facades\Facade'
        );

        // Observers
        BlogTranslation::observe(new SlugObserver());
        Blog::observe(new FileObserver());
    }

    public function register()
    {
        $app = $this->app;

        /*
         * Register route service provider
         */
        $app->register('TypiCMS\Modules\Blogs\Providers\RouteServiceProvider');

        /*
         * Sidebar view composer
         */
        $app->view->composer('core::admin._sidebar', 'TypiCMS\Modules\Blogs\Composers\SidebarViewComposer');

        /*
         * Add the page in the view.
         */
        $app->view->composer('blogs::public.*', function ($view) {
            $view->page = TypiCMS::getPageLinkedToModule('blogs');
        });

        $app->bind('TypiCMS\Modules\Blogs\Repositories\BlogInterface', function (Application $app) {
            $repository = new EloquentBlog(new Blog());
            if (!config('typicms.cache')) {
                return $repository;
            }
            $laravelCache = new LaravelCache($app['cache'], 'blogs', 10);

            return new CacheDecorator($repository, $laravelCache);
        });
    }
}
