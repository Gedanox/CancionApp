@extends('main.index')

@section('modalContent')
<div class="modal fade" id="modalDeleteType" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Confirm delete <span id="deleteType">XXX</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form id="modalDeleteResourceForm" action="" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Delete type"/>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('content')
    <div class="row" style="margin-top: 8px;">
    aquí va el contenido del index, por ejemplo, listado de bicicletas,
    desde el que se pueden editar, consultar y borrar las bicicletas
    y un enlace para crear bicicletas
    </div>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="personaTable">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">persona</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($persona as $personas)
                <tr>
                    <td>
                        {{ $person -> id }}
                    </td>
                    <td>
                        {{ $person -> name }}
                    </td>
                    <td>
                        <a href="javascript: void(0);"
                            class = "deleteRow"
                            data-name="{{ $person -> name }}"
                            data-url="{{ url('persona/' . $person -> id ) }}">
                            delete
                        </a>
                    </td>
                    <td>
                        <a href="{{ url('persona/' . $person -> id . '/edit') }}">edit</a>
                    </td>
                    <td>
                        <a href="{{ url('persona/' . $person -> id . '/edit') }}">show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <a href="{{ url('persona/create') }}" class="btn btn-success">add persona</a>
    </div>
@endsection

@section('scripts')
<form action="" method="post" id="deleteForm">
    @csrf
    @method('delete')
</form>
<script src="{{ url('assets/js/personaindex.js') }}"></script>
@endsection