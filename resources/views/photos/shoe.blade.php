@extends('layouts.app')

@section('title', $photo->title)

@section('content')
<div class="container">
    <h1>{{ $photo->title }}</h1>
    <img src="{{ asset($photo->image_path) }}" alt="{{ $photo->title }}" class="img-fluid">
    <p>{{ $photo->description }}</p>
    <a href="{{ route('photos.edit', $photo->id) }}" class="btn btn-secondary">Editar</a>
    <form action="{{ route('photos.destroy', $photo->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    <a href="{{ route('photos.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
