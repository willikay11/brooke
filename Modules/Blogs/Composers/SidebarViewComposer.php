<?php

namespace TypiCMS\Modules\Blogs\Composers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Gate;
use Maatwebsite\Sidebar\SidebarGroup;
use Maatwebsite\Sidebar\SidebarItem;

class SidebarViewComposer
{
    public function compose(View $view)
    {
        $view->sidebar->group(trans('global.menus.content'), function (SidebarGroup $group) {
            $group->addItem(trans('blogs::global.name'), function (SidebarItem $item) {
                $item->id = 'blogs';
                $item->icon = config('typicms.blogs.sidebar.icon');
                $item->weight = config('typicms.blogs.sidebar.weight');
                $item->route('admin::index-blogs');
                $item->append('admin::create-blog');
                $item->authorize(
                    Gate::allows('index-blogs')
                );
            });
        });
    }
}
