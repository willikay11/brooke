<?php

namespace TypiCMS\Modules\Blogs\Repositories;

use Illuminate\Database\Eloquent\Model;
use TypiCMS\Modules\Core\Repositories\RepositoriesAbstract;

class EloquentBlog extends RepositoriesAbstract implements BlogInterface
{
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}
