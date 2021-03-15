@extends("profesor.layout")


@section("opciones")
    <a class="btn btn-danger" href="{{route('profesor.create')}}">Agregar</a>
@endsection

@section("contenido")
    <table class="table-bordered table-hover table-info m-5">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>DNI</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        @foreach($profesores as $prof)
            <tr>
                <td>{{$prof->nombre}}</td>
                <td>{{$prof->apellido}}</td>
                <td>{{$prof->dni}}</td>
                <td>{{$prof->direccion}}</td>
                <td>{{$prof->telefono}}</td>
                <td><a href="{{route("profesor.edit", $prof)}}"><button id="button2" class="btn btn-success">Editar</button></a></td>
                <td>
                    <form action="{{route("profesor.destroy", $prof)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button id="button" class="btn btn-dark">Borrar</button>
                    </form>

                </td>

            </tr>
        @endforeach
@endsection
    </table>
