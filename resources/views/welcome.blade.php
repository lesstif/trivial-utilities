@extends('laravel-bulma-starter::layouts.bulma')

@section('content')

<div class="hero-body">

    {{--
    @push('right-nav-menu')
    <a class="nav-item is-tab" href="{{ url('/some-link') }}">A menu item</a>
    <a class="nav-item is-tab" href="{{ url('/some-other-link') }}">Another menu item</a>
    @endpush
    --}}

    <!-- Hero content: will be in the middle -->
    <div class="container has-text-centered">
        <h1 class="title">
            Trivial Utilities
        </h1>
        <h2 class="subtitle">
            <nav class="tabs is-fullwidth">
                <div class="container">
                    <ul>
                        <li><a href="char-encoding">Character Encoding change</a></li>
                        <li><a href="basexx-endecoder">Base XX En/Decoding</a></li>
                        <li><a href="source-beautifier">Source code Beautifier</a></li>
                        <li><a href="random-string">Random String Generator</a></li>
                        <li><a href="hash-function">Hash function</a></li>
                    </ul>
                </div>
            </nav>
        </h2>
    </div>

@endsection
