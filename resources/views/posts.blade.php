@extends('layouts.main')

@section('container')

    <h1 class="mt-3">Halaman Blog Posts</h1>

    @foreach ($posts as $post)

        <article class="mb-3 border-bottom pb-4">
            <h2 class="mt-3">
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h2>
            <p>By. <a href="" class="text-decoration-none">{{ $post->user->name }}</a> in <a
                    href="/categories/{{ $post->category->slug }}"
                    class="text-decoration-none">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more...</a>
        </article>

    @endforeach

@endsection
