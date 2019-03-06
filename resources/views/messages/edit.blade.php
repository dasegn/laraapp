@extends('layout')

@section('contenido')
    <h1>Mensaje</h1>

    <form action="{{ route('mensajes.update', $message->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="nombre">
            Nombre
            </label>
            <input type="text" class="form-control" value="{{ $message->nombre }}" name="nombre">
            <small class="form-text text-muted">
            {{ $errors->first('nombre') }}
            </small>
        </div>
        <div class="form-group">
            <label for="email">
            E-mail
            </label>
            <input type="text"  class="form-control" value="{{ $message->email }}" name="email">
            <small class="form-text text-muted">
            {{ $errors->first('email') }}
            </small>
        </div>
        <div class="form-group">
            <label for="mensaje">
            Mensaje
            </label>
            <textarea class="form-control" name="mensaje">{{ $message->mensaje }}</textarea>
            <small class="form-text text-muted">
            {{ $errors->first('mensaje') }}
            </small>
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>

@stop
