@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-secondary">Editar</a>
    <form action="{{ route('blog.destroy', $post->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    <a href="{{ route('blog.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
