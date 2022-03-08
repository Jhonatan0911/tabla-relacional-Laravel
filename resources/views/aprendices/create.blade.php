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
        <div class="col-12 col-md-6 mx-auto">
            <div class="card sombra">
                <div class="card-body">
                    <div class="row p-2">
                        <div class="text-center">
                            <i class="fas fa-user icon"></i>
                            <h4 class="center mb-3">Formulario crear aprendiz</h1>
                        </div>
                        <form action="{{ url('/aprendiz')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo" required>
                        </div>
                        <div class="mb-3">
                            <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad" required>
                        </div>
                        <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            @foreach ($fichas as $ficha)
                            <option value="{{$ficha->id}}"> {{$ficha->id}} </option>
                            @endforeach
                        </select>
                            
                        </div>
                        <input class="btn col-12 btn-enviar" type="submit" Value=" Guardar Datos ">
                        <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection