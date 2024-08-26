@extends('layouts.app')

@section('title', 'Trabajos de Diseño')

@section('content')
<div class="container">
    <h1>Trabajos de Diseño</h1>
    <a href="{{ route('works.create') }}" class="btn btn-primary">Nuevo Trabajo</a>
    <ul>
        @foreach ($works as $work)
        <li>
            <a href="{{ route('works.show', $work->id) }}">{{ $work->title }}</a>
        </li>
        @endforeach
    </ul>
</div>
@endsection
