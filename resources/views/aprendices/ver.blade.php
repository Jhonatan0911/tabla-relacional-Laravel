@extends('welcome')
@section('title','Home') 
@section('content') 
<style>
    body{
        background-color: #041633 !important;
    }
    .icon{
        color: #041633 !important;
        font-size: 40px !important;
    }
    .sombra{
        box-shadow: 0 6px 10px 0 rgba(96, 106, 128, 0.61);
    }
    .btn-enviar{
        background-color: #2F3788 !important;
        color: #fff !important
    }
</style>
<div class="container">
    <div class="row justify-content-center" style="height:90vh; align-items: center;">
        <div class="col-12 col-md-8 mx-auto">
            <div class="card sombra">
                <div class="card-body">
                    <div class="row p-2">
                        <div class="text-center">
                            <i class="fas fa-users icon"></i>
                            <h4 class="center mb-3">Tabla Aprendiz</h1>
                        </div>
                        <table class="table table-striped table-hover table-light">
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Telefono</th>
                                <th>Dirección</th>
                                <th>Correo</th>
                                <th>Edad</th>
                                <th>Ficha_id</th>
                                <th>Ficha</th>
                            </thead>
                            <tbody>
                                @foreach ($aprendizs as $aprendiz)
                                <tr>
                                    <td>{{$aprendiz->id}}</td>
                                    <td>{{$aprendiz->nombre}}</td>
                                    <td>{{$aprendiz->apellido}}</td>
                                    <td>{{$aprendiz->telefono}}</td>
                                    <td>{{$aprendiz->direccion}}</td>
                                    <td>{{$aprendiz->correo}}</td>
                                    <td>{{$aprendiz->edad}}</td>
                                    <td>{{$aprendiz->id_ficha}}</td>
                                    <td>{{$aprendiz->fichas->nombre_ficha}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
