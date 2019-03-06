@extends('layout')

@section('contenido')
    <h1>Mensaje {{ $message->id }}</h1>

    <div class="card">
        <div class="card-header">
            {{ $message->email }}
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p>{{ $message->mensaje }}</p>
            <footer class="blockquote-footer">
                <cite title="Source Title">{{ $message->nombre }}</cite>
            </footer>
            </blockquote>
        </div>
    </div>
    <div class="col py-3 px-0">
        <a class="btn btn-primary" href="{{ url()->previous() }}">Regresar</a>
    </div>
@stop
