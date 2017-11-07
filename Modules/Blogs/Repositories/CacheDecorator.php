<?php

namespace TypiCMS\Modules\Blogs\Repositories;

use TypiCMS\Modules\Core\Repositories\CacheAbstractDecorator;
use TypiCMS\Modules\Core\Services\Cache\CacheInterface;

class CacheDecorator extends CacheAbstractDecorator implements BlogInterface
{
    public function __construct(BlogInterface $repo, CacheInterface $cache)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }
}
