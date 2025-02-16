<?php
namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FAQController extends Controller
{
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

    public function edit(Faq $faq)
    {
        return view('faq.edit', [
            'faq' => $faq
        ]);
    }

    /**
     * Store a newly created Task in storage.
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

    public function delete(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faq.index');
    }
}

