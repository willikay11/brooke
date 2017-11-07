<?php

/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/7/17
 * Time: 4:56 PM
 */

namespace brooke\Blogs;

use TypiCMS\Modules\Blogs\Models\BlogTranslation;

class BlogsRepository
{

    public function getAllActiveBlogs()
    {
        return BlogTranslation::where('status', 1)
            ->get()
            ->map(function ($blog)
            {
                return[
                    'image' => '/uploads/blogs/'.$blog->owner->image,
                    'title' => $blog->title,
                    'slug' => $blog->slug,
                    'summary' => $blog->summary,
                    'body' => $blog->body
                ];
            });
    }

    public function getArticleBySlug($slug)
    {
        $article = BlogTranslation::where('slug', $slug)->where('status', 1)->first();

        return[
            'image' => '/uploads/blogs/'.$article->owner->image,
            'title' => $article->title,
            'slug' => $article->slug,
            'summary' => $article->summary,
            'body' => $article->body
        ];
    }
}