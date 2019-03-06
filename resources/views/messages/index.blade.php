@extends('layout')

@section('contenido')
    <h1>Mensajes</h1>

    <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($messages as $message)
              <tr>
              <th scope="row">{{ $message->id }}</th>
                <td>
                    <a href="{{ route('mensajes.show', $message->id) }}">
                    {{ $message->nombre }}
                    </a>
                </td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->mensaje }}</td>
                <td>
                    <form method="POST" action="{{ route('mensajes.destroy', $message->id) }}">
                        <a class="btn btn-primary" href="{{ route('mensajes.edit', $message->id) }}">Editar</a>
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn btn-primary" type="submit">Eliminar</button>
                    </form>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

@stop
