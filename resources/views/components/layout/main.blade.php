<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
{{-- Navigation bar --}}
<nav>
            <ul>
                <li><a href="{{ route('home') }}"
                   class="navbar-item {{ Request::route()->getName() === 'home' ? "active" : "" }}">
                    Home
                    </a></li>
                <li><a href="{{ route('about') }}"
                   class="navbar-item {{ Request::route()->getName() === 'about' ? "active" : "" }}">
                    About
                    </a></li>
                <li><a href="{{ route('faq') }}"
                   class="navbar-item {{ Request::route()->getName() === 'faq' ? "active" : "" }}">
                    FAQS
                    </a></li>
                <li><a href="{{ route('dashboard') }}"
                   class="navbar-item {{ Request::route()->getName() === 'dashboard' ? "active" : "" }}">
                    DashBoard
                    </a></li>
                <li><a href="{{ route('blogs.index') }}"
                       class="navbar-item {{ Request::route()->getName() === 'blog' ? "active" : "" }}">
                        Blogs
                    </a></li>
            </ul>
    <p class="credits">Naimi de Jong</p>
</nav>

{{-- Content --}}
<section class="section">
    <div class="container">
        {{ $slot }}
    </div>
</section>

<footer>
    <p>Made by: Naimi de Jong, for HBO-ICT PCO project.</p>
</footer>
</body>

</html>
