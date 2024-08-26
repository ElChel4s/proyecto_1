@extends('layouts.app')

@section('title', $work->title)

@section('content')
<div class="container">
    <h1>{{ $work->title }}</h1>
    <img src="{{ asset($work->image_path) }}" alt="{{ $work->title }}" class="img-fluid">
    <p>{{ $work->description }}</p>
    <a href="{{ route('works.edit', $work->id) }}" class="btn btn-secondary">Editar</a>
    <form action="{{ route('works.destroy', $work->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
    <a href="{{ route('works.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
