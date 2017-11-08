<?php

/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/7/17
 * Time: 4:56 PM
 */

namespace brooke\Blogs;

use TypiCMS\Modules\Blogs\Models\BlogTranslation;
use brooke\API\SortFilterPaginate;

class BlogsRepository
{

    use SortFilterPaginate;

    public function getAllActiveBlogs($number = null)
    {
        $blogs = BlogTranslation::where('status', 1);

        if (!is_null($number)) {
            $blogs = $blogs->take($number);
        }

        return $blogs->get()->map(function ($blog) {
            return [
                'image' => '/uploads/blogs/' . $blog->owner->image,
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

        return [
            'image' => '/uploads/blogs/' . $article->owner->image,
            'title' => $article->title,
            'slug' => $article->slug,
            'summary' => $article->summary,
            'body' => $article->body
        ];
    }

    public function getAllActiveBlogsApi($limit)
    {
        $filter = [
            'column' => 'status',
            'sign' => '=',
            'value' => '1'
        ];

        return $this->sortFilterPaginate(new BlogTranslation(), [$filter], function ($blog)
        {
            return[
                'image' => '/uploads/blogs/' . $blog->owner->image,
                'title' => $blog->title,
                'slug' => $blog->slug,
                'summary' => $blog->summary,
                'body' => $blog->body
            ];
        },null, $limit);
    }
}