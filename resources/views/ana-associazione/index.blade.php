@extends('adminlte::layouts.app')

@section('main-content')
<div class="container">

    <h1>Anaassociazione <a href="{{ url('/ana-associazione/create') }}" class="btn btn-primary btn-xs" title="Add New AnaAssociazione"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>S.No</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            {{-- */$x=0;/* --}}
            @foreach($anaassociazione as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    
                    <td>
                        <a href="{{ url('/ana-associazione/' . $item->id) }}" class="btn btn-success btn-xs" title="View AnaAssociazione"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                        <a href="{{ url('/ana-associazione/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Edit AnaAssociazione"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['/ana-associazione', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete AnaAssociazione" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete AnaAssociazione',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-wrapper"> {!! $anaassociazione->render() !!} </div>
    </div>

</div>
@endsection
