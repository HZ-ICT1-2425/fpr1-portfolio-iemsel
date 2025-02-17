<a href="{{ route('blogs.show', $blog) }}">
    <section class="blog blog-text">
        <h1>{{$blog ->title}}</h1>
        <p> {{$blog ->slug}}</p>
    </section>
</a>
