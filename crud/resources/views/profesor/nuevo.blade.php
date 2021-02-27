@extends("profesor.layout")


@section("opciones")
    <a class="btn btn-danger" href="{{route('profesor.index')}}">Cancelar</a>
@endsection

@section("contenido")
    <form class="m-5" action="{{route('profesor.store')}}" method ="post">
        @csrf
        <div class="form-group col-sm-5">
            <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="form-group col-sm-5">
            <label for="apellido">Apellido</label>
            <input class="form-control" type="text" name="apellido">
        </div>
        <div class="form-group col-sm-5">
            <label for="dni">DNI</label>
            <input class="form-control" type="text" name="dni">
        </div>
        <div class="form-group col-sm-5">
            <label for="direccion">Dirección</label>
            <input class="form-control" type="text" name="direccion">
        </div>
        <div class="form-group col-sm-5">
            <label for="telefono">Teléfono</label>
            <input class="form-control" type="text" name="telefono">
        </div>
        <button type="submit" class="btn-danger">Guardar</button>
   </form>
@endsection
