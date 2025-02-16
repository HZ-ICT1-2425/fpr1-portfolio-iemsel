<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class BlogController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function index()
    {
        return view('blogs.index');
    }

    /**
     * @param $slug
     * @return Factory|View|Application|void
     */
    public function show($slug)
    {
        $viewPath = "blogs." . $slug;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404, "Blog post not found");
    }
}
