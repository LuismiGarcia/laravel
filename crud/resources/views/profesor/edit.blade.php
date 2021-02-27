
@extends("profesor.layout")

@section("opciones")
    <a href="{{route('profesor.index')}}" class="btn btn-success">Volver</a>
@endsection

@section("contenido")
            <form action="{{route('profesor.update', $profesor)}}" method="POST">
                @csrf

                @method("PUT")
                <div class="form-group m-5">
                    <div class="form-group col-sm-5">
                        <label for="nombre" class="text-danger text-bold">Nombre</label>
                        <input type="text" class="form-control" value="{{$profesor->nombre}}" name="nombre">
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="apellido" class="text-danger text-bold">Apellido</label>
                        <input type="text" class="form-control" value="{{$profesor->apellido}}" name="apellido">
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="dni" class="text-danger text-bold">DNI</label>
                        <input type="text" class="form-control" value="{{$profesor->dni}}" name ="dni">
                    </div>
                <div class="form-group">
                    <div class="form-group col-sm-5">
                        <label for="nombre" class="text-danger text-bold">Dirección </label>
                        <input type="text" class="form-control" value="{{$profesor->direccion}}" name="direccion">
                    </div>
                    <div class="form-group col-sm-5">
                        <label for="telefono" class="text-danger text-bold">Teléfono</label>
                        <input type="text" class="form-control" value="{{$profesor->telefono}}" name="telefono">
                    </div>
                </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </form>

@endsection



