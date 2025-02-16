<?php
namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    /**
     * @return Factory|View|Application
     */
    public function index()
    {
        return view('faq.index', [
            'faqs' => Faq::all()
        ]);
    }

    /**
     * Show the form for creating a new Task.
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * @param Faq $faq
     * @return Factory|View|Application
     */
    public function edit(Faq $faq)
    {
        return view('faq.edit', [
            'faq' => $faq
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        // Store FAQ
        $faq = Faq::create([
            'question' => $validated['question'],
            'answer' => $validated['answer'],
        ]);

        return redirect()->route('faq.index')->with('success', "FAQ #$faq->id created!");
    }

    /**
     * @param Request $request
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function update(Request $request, Faq $faq)
    {
        // Validate the request
        $validated = $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);

        $faq -> update($validated);

        // Redirect to the blog index page
        return redirect()->route('faq.index');
    }

    /**
     * @param Faq $faq
     * @return RedirectResponse
     */
    public function delete(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index');
    }
}

