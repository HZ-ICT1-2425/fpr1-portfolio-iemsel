<x-layout.main>
    <form class="center" action="{{ route('blogs.update', $blog->id) }}" method="POST">
        @csrf
        @method('PUT')
        <h1>Edit the Blog</h1>
        <br>
        <h2>Change what needs to be changed and click 'Save'</h2>

        <div class="field">
            <label for="title" class="label faq_title">Title</label>
            <div class="control has-icons-right">
                <input type="text" name="title" id="title" placeholder="Enter the title..."
                       class="input @error('title') is-danger @enderror"
                       value="{{ old('title', $blog->title) }}" autocomplete="question" autofocus>
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
            <label for="slug" class="label faq_title">Slug</label>
            <div class="control has-icons-right">
                <textarea name="slug" id="slug"
                          class="textarea @error('slug') is-danger @enderror"
                          placeholder="Enter a blog slug...">{{ old('answer', $blog->slug) }}</textarea>
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
                          placeholder="Enter a blog body...">{{ old('body'), $blog->body }}</textarea>
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
                <button type="submit" class="button is-primary">Save</button>
                <a href="{{ url()->previous() }}" class="button is-light">Cancel</a>
                <button type="reset" class="button is-warning">Reset</button>
            </div>
        </div>
    </form>
</x-layout.main>
