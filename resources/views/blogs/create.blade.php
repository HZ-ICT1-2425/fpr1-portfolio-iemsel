<x-layout.main>
    <form class="center" action="{{ route('blogs.store') }}" method="POST">
        @csrf
        <h1>Create a New Blog</h1>
        <br>
        <h2>Please fill out all the form fields and click 'Submit'</h2>

        <div class="field">
            <label for="title" class="label faq_title">title</label>
            <div class="control has-icons-right">
                <input type="text" name="title" id="title" placeholder="Enter the title..."
                       class="input @error('title') is-title @enderror"
                       value="{{ old('title') }}" autocomplete="title" autofocus>
                @error('title')
                <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                @enderror
            </div>
            @error('title')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="slug" class="label faq_title">slug</label>
            <div class="control has-icons-right">
                <textarea name="slug" id="slug"
                          class="textarea @error('slug') is-danger @enderror"
                          placeholder="Enter a blog slug...">{{ old('slug') }}</textarea>
                @error('slug')
                <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                @enderror
            </div>
            @error('slug')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <label for="body" class="label faq_title">Body</label>
            <div class="control has-icons-right">
                <textarea name="body" id="body"
                          class="textarea @error('body') is-danger @enderror"
                          placeholder="Enter a blog body...">{{ old('body') }}</textarea>
                @error('body')
                <span class="icon has-text-danger is-small is-right">
                    <i class="fas fa-exclamation-triangle"></i>
                </span>
                @enderror
            </div>
            @error('body')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field is-grouped is-grouped-centered">
            <div class="control is-flex is-flex-direction-column gap-2 has-text-centered">
                <button type="submit" class="button is-primary">Submit</button>
                <a href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                <button type="reset" class="button is-warning">Reset</button>
            </div>
        </div>
    </form>
</x-layout.main>
