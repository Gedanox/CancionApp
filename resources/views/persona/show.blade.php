@extends('app.base')

@section('content')
<div>
    <table class="table table-striped" id="bikeTable">
        <tbody>
            <tr>
                <td>
                   #id 
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    bike
                </td>
                <td>
                    
                </td>
            </tr>
            <tr>
                <td>
                    
                </td>
                <td>
                    
                </td>
            </tr>
            <th scope="col"># id</th>
            <th scope="col">bike</th>
            <th scope="col">delete</th>
            <th scope="col">edit</th>
            <th scope="col">show</th>
        </tbody>
    </table>
    aquí se muestra en detalle los datos de la bicicleta cuyo id es {{ $id }}
    <br>
    <a href="{{ url('bike') }}" class="btn btn-primary">back</a>
    &nbsp;
    <a href="{{ url('bike/' . $bike->id . '/edit') }}" class="btn btn-primary">edit bike</a>
    &nbsp;
    <button form="deleteForm" type="submit" class="btn btn-primary">delete bike</button>
</div>
<form action="{{ url('bike/' . $bike->id) }}" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
@endsection

@section('scripts')
<script src="{{ url('assets/js/bikeedit.js') }}"></script>
@endsection