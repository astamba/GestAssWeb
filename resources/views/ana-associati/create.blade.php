@extends('adminlte::layouts.app')

@section('htmlheader_title', 'Anagrafica Associati')
@section('contentheader_title', 'Anagrafica Associati')
@section('contentheader_description', '')
@section('main-content')

<div class="container-fluid">
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dati Anagrafici</h3>
                    </div>

                    {!! Form::open(['url' => '/ana-associati', 'class' => 'form-horizontal']) !!}
                    <div class="row">
                        <div class="form-group-sm col-md-6">
                            <label class="label text-black" for="cognome">Cognome</label>
                            <input type="text" value="" class="form-control text-blue" id="cognome" name="cognome">
                        </div>
                        <div class="form-group-sm col-md-6">
                            <label class="label text-black" for="nome">Nome</label>
                            <input type="text" value="" class="form-control text-blue" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group-sm col-md-5">
                            <label class="label text-black" for="indirizzo">Indirizzo</label>
                            <input type="text" value="" class="form-control text-blue" id="indirizzo" name="indirizzo">
                        </div>
                        <div class="form-group-sm col-md-1">
                            <label class="label text-black" for="cap">Cap</label>
                            <input type="text" value="" class="form-control text-blue" id="cap" name="cap">
                        </div>
                        <div class="form-group-sm col-md-5">
                            <label class="label text-black" for="localita">Localit&agrave</label>
                            <input type="text" value="" class="form-control text-blue" id="localita" name="localita">
                        </div>
                        <div class="form-group-sm col-md-1">
                            <label class="label text-black" for="provincia">Prov.</label>
                            <input type="text" value="" class="form-control text-blue" id="provincia" name="provincia">
                        </div>
                    </div>
                    <div class="box-header with-border">
                        <h3 class="box-title">Dati Tessere</h3>
                    </div>
                    <div class="row">
                        <div class="form-group-sm col-md-1">
                            <label class="label text-black" for="provincia">Prov.</label>
                            <input type="text" value="" class="form-control text-blue" id="provincia" name="provincia">
                        </div>
                    </div>
                    <div class="col-md-12"><hr></div>
                    <div class="row">
                        <div class="form-group-sm col-md-2" style="float: right;">
                            <input type="submit" class="btn btn-info btn-sm" value="OK" style="width: 65px">
                            <input type="button" class="btn btn-danger btn-sm" value="Annulla" style="width: 65px" onclick="window.location = '{{url('/ana-associati')}}'">
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection