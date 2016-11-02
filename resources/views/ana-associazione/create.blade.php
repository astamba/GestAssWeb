@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Anagrafica Associazione
@endsection
@section('contentheader_title', 'Anagrafica Associazione')
@section('contentheader_description', '')
@section('main-content')

    <h1>Create New AnaAssociazione</h1>
    <hr/>

    {!! Form::open(['url' => '/ana-associazione', 'class' => 'form-horizontal']) !!}

    

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection