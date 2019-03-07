@extends('layout')

@section('contenido')
    <h1>Usuarios</h1>

    <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr>
              <th scope="row">{{ $user->id }}</th>
                <td>
                    <a href="">
                    {{ $user->name }}
                    </a>
                </td>
                <td>{{ $user->email }}</td>
                <td>

                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

@stop
