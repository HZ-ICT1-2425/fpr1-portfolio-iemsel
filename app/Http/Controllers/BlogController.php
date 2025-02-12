<?php
namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        return view('blogs.index');
    }

    public function show($slug)
    {
        $viewPath = "blogs." . $slug;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404, "Blog post not found");
    }
}

