@extends('layout')
@section('contenido')
    <h1>Saludos para <?php echo $nombre;?></h1>
    <h1>Saludos para {{ $nombre }}</h1>
    <ul>
        @forelse ($consolas as $consola)
            <li>{{ $consola }}</li>
        @empty
            <p>No hay consolas :(</p>
        @endforelse
    </ul>

    @if (count($consolas) === 1)
        <p>Solo tienes una consola</p>

    @elseif(count($consolas) > 1)
        <p>Tienes varias consolas</p>
    @else
        <p>No tienes consolas :(</p>
    @endif
    
    {{-- {!! $html !!}
    {!! $script !!} --}}
@stop