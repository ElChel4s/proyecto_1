@extends('layouts.app')

@section('title', 'Blog')

@section('content')
<div class="container">
    <h1>Blog</h1>
    <a href="{{ route('blog.create') }}" class="btn btn-primary">Nueva Entrada</a>
    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="{{ route('blog.show', $post->id) }}">{{ $post->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
