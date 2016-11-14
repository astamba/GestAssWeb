@extends('adminlte::layouts.app')
@section('htmlheader_title', 'Anagrafica Associati')
@section('contentheader_title', 'Anagrafica Associati')
@section('contentheader_description', '')

@section('main-content')
<div class="container-fluid">
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Elenco Associati <a href="{{ url('/ana-associati/create') }}" class="btn btn-primary btn-xs" title="Nuovo Associato"><span class="glyphicon glyphicon-plus" aria-hidden="true"/></a></h3>
                </div>
                <div class="box box-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cognome</th>
                                <th>Nome</th>
                                <th>Indirizzo</th>
                                <th>Cap</th>
                                <th>Localit&agrave</th>
                                <th>Provincia</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ana as $item)
                                <tr>
                                    <td>
                                        <a href="{{ url('/ana-associati/' . $item->id) }}" class="btn btn-success btn-xs" title="Visualizza dati associato"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"/></a>
                                        <a href="{{ url('/ana-associati/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" title="Modifica dati associato"><span class="glyphicon glyphicon-pencil" aria-hidden="true"/></a>
                                        {!! Form::open([
                                            'method'=>'DELETE',
                                            'url' => ['/ana-associati', $item->id],
                                            'style' => 'display:inline'
                                        ]) !!}
                                        {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Elimina associato" />', array(
                                                'type' => 'submit',
                                                'class' => 'btn btn-danger btn-xs',
                                                'title' => 'Elimina associato',
                                                'onclick'=>'return confirm("Confermi la concellazione?")'
                                        )) !!}
                                        {!! Form::close() !!}
                                    </td>
                                    <td>{{ $item->cognome}}</td>
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->indirizzo }}</td>
                                    <td>{{ $item->cap }}</td>
                                    <td>{{ $item->localita }}</td>
                                    <td>{{ $item->provincia }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{--<div class="pagination-wrapper"> {!! $ana->render() !!} </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
