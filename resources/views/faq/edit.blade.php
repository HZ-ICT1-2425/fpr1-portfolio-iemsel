<x-layout.main>
    <form class="center" action="{{ route('faq.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Edit the FAQ</h1>
        <br>
        <h2>Change what needs to be changed and click 'Save'</h2>

        <div class="field">
            <label for="question" class="label faq_title">Question</label>
            <div class="control has-icons-right">
                <input type="text" name="question" id="question" placeholder="Enter the question..."
                       class="input @error('question') is-danger @enderror"
                       value="{{ old('question', $faq->question) }}" autocomplete="question" autofocus>
                @error('question')
                <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                @enderror
            </div>
            @error('question')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="answer" class="label faq_title">Answer</label>
            <div class="control has-icons-right">
                <textarea name="answer" id="answer"
                          class="textarea @error('answer') is-danger @enderror"
                          placeholder="Enter a FAQ answer...">{{ old('answer', $faq->answer) }}</textarea>
                @error('answer')
                <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                @enderror
            </div>
            @error('answer')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="link" class="label faq_title">link</label>
            <div class="control has-icons-right">
                <textarea name="link" id="link"
                          class="textarea @error('link') is-danger @enderror"
                          placeholder="Enter a FAQ link...">{{ old('link') }}</textarea>
                @error('link')
                <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                @enderror
            </div>
            @error('link')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field is-grouped is-grouped-centered">
            <div class="control is-flex is-flex-direction-column gap-2 has-text-centered">
                <button type="submit" class="button is-primary">Save</button>
                <a href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                <button type="reset" class="button is-warning">Reset</button>
            </div>
        </div>
    </form>
</x-layout.main>
