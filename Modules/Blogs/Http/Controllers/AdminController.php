<?php

namespace TypiCMS\Modules\Blogs\Http\Controllers;

use TypiCMS\Modules\Core\Http\Controllers\BaseAdminController;
use TypiCMS\Modules\Blogs\Http\Requests\FormRequest;
use TypiCMS\Modules\Blogs\Models\Blog;
use TypiCMS\Modules\Blogs\Repositories\BlogInterface;

class AdminController extends BaseAdminController
{
    public function __construct(BlogInterface $blog)
    {
        parent::__construct($blog);
    }

    /**
     * List models.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $models = $this->repository->all([], true);
        app('JavaScript')->put('models', $models);

        return view('blogs::admin.index');
    }

    /**
     * Create form for a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = $this->repository->getModel();

        return view('blogs::admin.create')
            ->with(compact('model'));
    }

    /**
     * Edit form for the specified resource.
     *
     * @param \TypiCMS\Modules\Blogs\Models\Blog $blog
     *
     * @return \Illuminate\View\View
     */
    public function edit(Blog $blog)
    {
        return view('blogs::admin.edit')
            ->with(['model' => $blog]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \TypiCMS\Modules\Blogs\Http\Requests\FormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(FormRequest $request)
    {
        $blog = $this->repository->create($request->all());

        return $this->redirect($request, $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \TypiCMS\Modules\Blogs\Models\Blog             $blog
     * @param \TypiCMS\Modules\Blogs\Http\Requests\FormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Blog $blog, FormRequest $request)
    {
        $this->repository->update($request->all());

        return $this->redirect($request, $blog);
    }
}
