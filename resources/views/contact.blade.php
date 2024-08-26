@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
<div class="container">
    <h1>Contacto</h1>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone">Teléfono</label>
            <input type="text" id="phone" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea id="message" name="message" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <h2>Contáctame en:</h2>
    <p><a href="https://wa.me/your-phone-number" target="_blank">WhatsApp</a></p>
    <p><a href="https://t.me/your-telegram-id" target="_blank">Telegram</a></p>
</div>
@endsection
