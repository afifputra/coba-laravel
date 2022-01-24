@extends('layouts.main')

@section('container')

    <h1 class="mb-5 mt-3">{{ $post->title }}</h1>
    <p>By. Admin in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p>{{ $post->body }}</p>
    <a href="/posts">Back to post</a>

@endsection
