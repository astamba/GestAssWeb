@extends('layouts.app')

@section('content')
<div class="container">

    <h1>AnaAssociazione {{ $anaassociazione->id }}
        <a href="{{ url('ana-associazione/' . $anaassociazione->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AnaAssociazione"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
        {!! Form::open([
            'method'=>'DELETE',
            'url' => ['anaassociazione', $anaassociazione->id],
            'style' => 'display:inline'
        ]) !!}
            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true"/>', array(
                    'type' => 'submit',
                    'class' => 'btn btn-danger btn-xs',
                    'title' => 'Delete AnaAssociazione',
                    'onclick'=>'return confirm("Confirm delete?")'
            ))!!}
        {!! Form::close() !!}
    </h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tbody>
                <tr>
                    <th>ID</th><td>{{ $anaassociazione->id }}</td>
                </tr>
                
            </tbody>
        </table>
    </div>

</div>
@endsection
