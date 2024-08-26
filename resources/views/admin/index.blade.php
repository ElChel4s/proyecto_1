@extends('layouts.app')

@section('title', 'Administración')

@section('content')
<div class="container">
    <h1>Panel de Administración</h1>
    <ul>
        <li><a href="{{ route('admin.contacts') }}">Ver Mensajes de Contacto</a></li>
        <li><a href="{{ route('photos.index') }}">Gestionar Fotografías</a></li>
        <li><a href="{{ route('works.index') }}">Gestionar Trabajos</a></li>
        <li><a href="{{ route('blog.index') }}">Gestionar Blog</a></li>
    </ul>
</div>
@endsection
