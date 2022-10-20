@extends('app.base')

@section('content')
<div>
    aquí va el contenido de create, se presenta el formulario con los campos
    que se han de introducir para dar de alta una bicicleta nueva
</div>
<div>
    <form action="{{ url('cancion') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">titulo</label>
            <input  required type="text" minlength="3" maxlength="80" class="form-control" id="name" name="titulo" placeholder="titulo">
            <label for="nombre">interprete</label>
            <input  required type="text" minlength="3" maxlength="100" class="form-control" id="name" name="interprete" placeholder="interprete">
            <label for="nombre">autor</label>
            <input  type="text" maxlength="100" class="form-control" id="name" name="autor" placeholder="autor">
            <label for="nombre">duracion</label>
            <input  type="time" class="form-control" id="name" name="duracion" placeholder="duracion">
            <label for="nombre">genero</label>
            <input  required type="text" minlength="3" maxlength="20" class="form-control" id="name" name="genero" placeholder="genero">
            <label for="nombre">album</label>
            <input type="text" maxlength="70" class="form-control" id="name" name="album" placeholder="album">
            <label for="nombre">orden</label>
            <input  type="number" maxlength="6" class="form-control" id="name" name="orden" placeholder="orden">
            <label for="nombre">fecha publicacion</label>
            <input  required type="date" class="form-control" id="name" name="fechapubli" placeholder="fecha publicacion">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">add</button>
        &nbsp;
        <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
    </form>
</div>
@endsection