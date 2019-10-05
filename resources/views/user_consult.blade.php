@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1> Bienvenido: {{ $user->name }} </h1>
                    <?php
                        switch ($user->rol) {
                            case 1:
                                echo 'Rol "Básico" unicamente accesso';
                                break;
                            case 2:
                                echo 'Rol "Medio" acceso y consulta';
                                break;
                            case 3:
                                echo 'Rol "Medio-Alto" insertar, nada de consulta';
                                break;
                            case 4:
                                echo 'Rol "Alto-MEDIO" consulta y agregar';
                                break;
                            case 5:
                                echo 'Rol "Alto" consultar y agregar';
                                break;
                        }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
