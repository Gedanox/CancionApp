@extends('app.base')

@section('content')
<div>
    <table class="table table-striped" id="bikeTable">
        <tbody>
            <tr>
                <td>
                    <th scope="col">id</th>
                    <th scope="col">titulo</th>
                    <th scope="col">interpreete</th>
                    <th scope="col">autor</th>
                    <th scope="col">duracion</th>
                    <th scope="col">genero</th>
                    <th scope="col">album</th>
                    <th scope="col">orden</th>
                    <th scope="col">fecha publicacion</th>
                </td>
            </tr>
            <tr>
                <td>
                    <th scope="col">{{ $cancion -> id }}</th>
                    <th scope="col">{{ $cancion -> titulo }}</th>
                    <th scope="col">{{ $cancion -> interprete }}</th>
                    <th scope="col">{{ $cancion -> autor }}</th>
                    <th scope="col">{{ $cancion -> duracion }}</th>
                    <th scope="col">{{ $cancion -> genero }}</th>
                    <th scope="col">{{ $cancion -> album }}</th>
                    <th scope="col">{{ $cancion -> orden }}</th>
                    <th scope="col">{{ $cancion -> fechapubli }}</th>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <a href="{{ url('cancion') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('cancion/' . $cancion -> id . '/edit') }}" class="btn btn-primary">edit cancion</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete cancion</button>
</div>
<form action="{{ url('cancion/' . $cancion->id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection