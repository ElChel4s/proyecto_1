@extends('layouts.app')

@section('title', 'Mensajes de Contacto')

@section('content')
<div class="container">
    <h1>Mensajes de Contacto</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Mensaje</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
