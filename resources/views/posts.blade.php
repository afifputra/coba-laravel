@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)

        <article>
            <h2 class="mt-3">
                <a href="/posts/{{ $post->id }}">
                    {{ $post->title }}
                </a>
            </h2>
            <p>{{ $post->excerpt  }}</p>
        </article>

    @endforeach

@endsection
