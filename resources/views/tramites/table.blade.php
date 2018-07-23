<table class="table table-responsive" id="tramites-table">
    <thead>
        <tr>
            <th>Id Persona</th>
        <th>Cod Documento</th>
        <th>Fecha</th>
        <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($tramites as $tramite)
        <tr>
            <td>{!! $tramite->id_persona !!}</td>
            <td>{!! $tramite->cod_documento !!}</td>
            <td>{!! $tramite->fecha !!}</td>
            <td>{!! $tramite->estado !!}</td>
            <td>
                {!! Form::open(['route' => ['tramites.destroy', $tramite->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('tramites.show', [$tramite->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('tramites.edit', [$tramite->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>