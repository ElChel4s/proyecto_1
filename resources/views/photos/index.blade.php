@extends('layouts.app')

@section('title', 'Fotografías')

@section('content')
<div class="container">
    <h1>Fotografías</h1>
    <a href="{{ route('photos.create') }}" class="btn btn-primary">Nueva Fotografía</a>
    <ul>
        @foreach ($photos as $photo)
        <li>
            <a href="{{ route('photos.show', $photo->id) }}">{{ $photo->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
