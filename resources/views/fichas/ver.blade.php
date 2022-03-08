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
                                <th>Coordinación</th>
                                <th>Fecha inicio</th>
                                <th>Fecha fin</th>
                            </thead>
                            <tbody>
                                @foreach ($fichas as $ficha)
                                <tr>
                                    <td>{{$ficha->id}}</td>
                                    <td>{{$ficha->nombre_ficha}}</td>
                                    <td>{{$ficha->coordinacion}}</td>
                                    <td>{{$ficha->f_inicio}}</td>
                                    <td>{{$ficha->f_fin}}</td>
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