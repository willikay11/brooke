<?php

namespace TypiCMS\Modules\Blogs\Models;

use TypiCMS\Modules\Core\Models\BaseTranslation;

class BlogTranslation extends BaseTranslation
{
    protected $fillable = [
        'title',
        'slug',
        'status',
        'summary',
        'body',
    ];

    /**
     * get the parent model.
     */
    public function owner()
    {
        return $this->belongsTo('TypiCMS\Modules\Blogs\Models\Blog', 'blog_id');
    }
}
