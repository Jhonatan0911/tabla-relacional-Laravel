<table class="table table-striped table-hover table-light">
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Telefono</th>
        <th>Dirección</th>
        <th>Correo</th>
        <th>Edad</th>
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
        </tr>
        @endforeach
    </tbody>
</table>