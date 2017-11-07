<?php

namespace TypiCMS\Modules\Blogs\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use TypiCMS\Modules\Core\Facades\TypiCMS;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'TypiCMS\Modules\Blogs\Http\Controllers';

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     *
     * @return void
     */
    public function map(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function (Router $router) {

            /*
             * Front office routes
             */
            if ($page = TypiCMS::getPageLinkedToModule('blogs')) {
                $options = $page->private ? ['middleware' => 'auth'] : [];
                foreach (config('translatable.locales') as $lang) {
                    if ($page->translate($lang)->status && $uri = $page->uri($lang)) {
                        $router->get($uri, $options + ['as' => $lang.'.blogs', 'uses' => 'PublicController@index']);
                        $router->get($uri.'/{slug}', $options + ['as' => $lang.'.blogs.slug', 'uses' => 'PublicController@show']);
                    }
                }
            }

            /*
             * Admin routes
             */
            $router->get('admin/blogs', 'AdminController@index')->name('admin::index-blogs');
            $router->get('admin/blogs/create', 'AdminController@create')->name('admin::create-blog');
            $router->get('admin/blogs/{blog}/edit', 'AdminController@edit')->name('admin::edit-blog');
            $router->post('admin/blogs', 'AdminController@store')->name('admin::store-blog');
            $router->put('admin/blogs/{blog}', 'AdminController@update')->name('admin::update-blog');

            /*
             * API routes
             */
            $router->get('api/blogs', 'ApiController@index')->name('api::index-blogs');
            $router->put('api/blogs/{blog}', 'ApiController@update')->name('api::update-blog');
            $router->delete('api/blogs/{blog}', 'ApiController@destroy')->name('api::destroy-blog');
        });
    }
}
