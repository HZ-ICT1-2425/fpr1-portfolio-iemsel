<x-layout.main>
    <body>
    <h1 class="center">Blogs</h1>
    <hr>
    <section class="starbg">
        <a href="{{ url('blogs\study-choice') }}">
            <section class="blog blog-text">
                <h1>Study Choice</h1>
                <p> Why i choose this study, I will talk about why I choose this study,
                    what my thought progess for choosing this location and why I choose international class here.
                </p>
            </section>
        </a>
        <a href="{{ url('blogs\programming-experience') }}">
            <section class="blog blog-text">
                <h1>Programming Experience</h1>
                <p> My previous programming experience will be discussed here.</p>
            </section>
        </a>
        <a href="{{ url('blogs\swot') }}">
            <section class="blog blog-text">
                <h1>Personal SWOT Analysis</h1>
                <p> Strengths Weakness Opportunity Threats analysis.
                    All these points above will be talked about in this blog.
                </p>
            </section>
        </a>
        <a href="{{ url('blogs\first-feedback') }}">
            <section class="blog blog-text">
                <h1>First Feedback</h1>
                <p> How my feedback went, what i decided to do with the feedback
                    and the reason behind it. Will all be discussed in this blog
                </p>
            </section>
        </a>
        <a href="{{ url('blogs\ict-field') }}">
            <section class="blog blog-text">
                <h1>ICT field</h1>
                <p> A article/blog about the ICT field.</p>
            </section>
        </a>
    </section>
    </body>
</x-layout.main>
