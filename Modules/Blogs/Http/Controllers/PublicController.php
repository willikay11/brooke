<?php

namespace TypiCMS\Modules\Blogs\Http\Controllers;

use TypiCMS\Modules\Core\Http\Controllers\BasePublicController;
use TypiCMS\Modules\Blogs\Repositories\BlogInterface;

class PublicController extends BasePublicController
{
    public function __construct(BlogInterface $blog)
    {
        parent::__construct($blog);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $models = $this->repository->all();

        return view('blogs::public.index')
            ->with(compact('models'));
    }

    /**
     * Show news.
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $model = $this->repository->bySlug($slug);

        return view('blogs::public.show')
            ->with(compact('model'));
    }
}
