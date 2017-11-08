<?php
/**
 * Created by PhpStorm.
 * User: mac-intern
 * Date: 11/7/17
 * Time: 4:59 PM
 */

namespace App\Http\Controllers;


use brooke\Blogs\BlogsRepository;

class BlogController extends Controller
{

    /**
     * @var BlogsRepository
     */
    private $blogsRepository;

    public function __construct(BlogsRepository $blogsRepository)
    {

        $this->blogsRepository = $blogsRepository;
    }

    public function getBlogs($limit)
    {
        return $this->blogsRepository->getAllActiveBlogsApi($limit);
    }

    public function index()
    {
        $blogs = $this->blogsRepository->getAllActiveBlogs();

        return view('frontend.blog.index', [
            'blogs' => $blogs
        ]);
    }

    public function article($slug)
    {
        $article = $this->blogsRepository->getArticleBySlug($slug);

        return view('frontend.blog.article', [
            'article' => $article
        ]);
    }
}