<?php
namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function index()
    {
        return view('blogs.index', [
            'blogs' => Blog::all()
        ]);
    }

    /**
     * @param $slug
     * @return Factory|View|Application|void
     */
    public function slug($slug)
    {
        $viewPath = "blogs." . $slug;

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

     abort(404, "Blog post not found");
    }

    public function show(Blog $blog)
    {
        return view('blogs.show', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new FAQ.
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * @param Blog $blog
     * @return Factory|View|Application
     */
    public function edit(Blog $blog)
    {
        return view('blogs.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        // Store FAQ
        $blog = Blog::create([
            'title' => $validated['title'],
            'slug' => $validated['slug'],
            'body' => $validated['body']
        ]);

        return redirect()->route('blogs.index')->with('success', "Blog #$blog->id created!");
    }

    /**
     * @param Request $request
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function update(Request $request, Blog $blog)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required'
        ]);

        $blog -> update($validated);

        // Redirect to the blog index page
        return redirect()->route('blogs.index');
    }

    /**
     * @param Blog $blog
     * @return RedirectResponse
     */
    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index');
    }
}
