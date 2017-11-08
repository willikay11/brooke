<?php
/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/7/17
 * Time: 5:31 PM
 */

namespace App\Http\Controllers;


use brooke\Blogs\BlogsRepository;

class HomeController extends Controller
{

    /**
     * @var BlogsRepository
     */
    private $blogsRepository;

    public function __construct(BlogsRepository $blogsRepository)
    {

        $this->blogsRepository = $blogsRepository;
    }

    public function index()
    {
        $blogs = $this->blogsRepository->getAllActiveBlogs(3);

        return view('frontend.homepage.index-2', [
            'blogs' => $blogs
        ]);
    }
}