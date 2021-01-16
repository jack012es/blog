@extends('layout')
@section('contenido')
    <h1>Contactos</h1>
    <h2>Escribeme</h2>
    <form method="POST" action="contacto">
        <label for="nombre">
            Nombre
            <input type="text" name="nombre">
        </label>
        <label for="email">
            Email
            <input type="text" name="email">
        </label>
        <label for="mensaje">
            Mensaje
           <textarea name="mensaje"></textarea>
        </label>
        <input type="submit" value="Enviar">
    </form>
@endsection
