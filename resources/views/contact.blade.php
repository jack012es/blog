@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact</h1>
    <form action="{{ route('contact') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre.."><br>
        <input type="text" name="email" placeholder="Email.."><br>
        <input type="text" name="subject" placeholder="Asunto.."><br>
        <textarea name="content" placeholder="Mensaje..." cols="30" rows="10"></textarea><br>
        <button>Enviar</button>
    </form>
@endsection
