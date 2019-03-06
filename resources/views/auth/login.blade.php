@extends('layout')

@section('contenido')
<h1>Login</h1>
<form action="/login" method="post">
    {{ csrf_field() }}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Iniciar sesión</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Correo electrónico:</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email" autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password">
                                </div>
                            </div>


                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Iniciar sesión
                                </button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
