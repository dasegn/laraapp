@extends('layout')

@section('contenido')
    <h1>Contacto</h1>

    <form action="{{ route('messages.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nombre">
            Nombre
            </label>
            <input type="text" class="form-control" value="{{ old('nombre') }}" name="nombre">
            <small class="form-text text-muted">
            {{ $errors->first('nombre') }}
            </small>
        </div>
        <div class="form-group">
            <label for="email">
            E-mail
            </label>
            <input type="text"  class="form-control" value="{{ old('email') }}" name="email">
            <small class="form-text text-muted">
            {{ $errors->first('email') }}
            </small>
        </div>
        <div class="form-group">
            <label for="mensaje">
            Mensaje
            </label>
            <textarea class="form-control" name="mensaje">{{ old('mensaje') }}</textarea>
            <small class="form-text text-muted">
            {{ $errors->first('mensaje') }}
            </small>
        </div>
        <input type="submit" class="btn btn-primary" value="Enviar">
    </form>

@stop
