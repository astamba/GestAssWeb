@extends('adminlte::layouts.app')
@section('htmlheader_title', 'Anagrafica Associazione')
@section('contentheader_title', 'Anagrafica Associazione')
@section('contentheader_description', '')

@section('main-content')
    <div class="container">
        <div class="container-fluid spark-screen">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Dati Anagrafici</h3>
                        </div>
                        {!! Form::model($anaassociazione, [
                            'method' => 'PATCH',
                            'url' => ['/ana-associazione', $anaassociazione->id],
                            'class' => 'form-horizontal',
                            'role' => 'form',
                            'enctype' => 'multipart/form-data'
                        ]) !!}
                        <div class="box box-body">
                            <div class="row">
                                <div class="form-group-sm col-md-12">
                                    <label class="label text-black" for="associazione">Associazione</label>
                                    <input type="text" value="{{$anaassociazione->associazione}}" class="form-control text-blue" id="associazione" name="associazione">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group-sm col-md-12">
                                    <label class="label text-black" for="indirizzo">Indirizzo</label>
                                    <input type="text" value="{{$anaassociazione->indirizzo}}" class="form-control text-blue" id="indirizzo" name="indirizzo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group-sm col-md-12">
                                    <label class="label text-black" for="indirizzo2">Indirizzo 2</label>
                                    <input type="text" value="{{$anaassociazione->indirizzo2}}" class="form-control text-blue" id="indirizzo2" name="indirizzo2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group-sm col-md-2">
                                    <label class="label text-black" for="cap">Cap</label>
                                    <input type="text" value="{{$anaassociazione->cap}}" class="form-control text-blue" id="cap" name="cap">
                                </div>
                                <div class="form-group-sm col-md-9">
                                    <label class="label text-black" for="localita">Localit&agrave</label>
                                    <input type="text" value="{{$anaassociazione->localita}}" class="form-control text-blue" id="localita" name="localita">
                                </div>
                                <div class="form-group-sm col-md-1">
                                    <label class="label text-black" for="provincia">Prov.</label>
                                    <input type="text" value="{{$anaassociazione->provincia}}" class="form-control text-blue" id="provincia" name="provincia">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group-sm col-md-12">
                                    <label class="label text-black" for="presidente">Presidente</label>
                                    <input type="text" value="{{$anaassociazione->presidente}}" class="form-control text-blue" id="presidente" name="presidente">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group-sm col-md-12">
                                    <label class="label text-black" for="logo">Logo</label>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="4194304" />
                                    <input id="logo" name="logo" class="file" type="file" multiple data-min-file-count="1">
                                </div>
                            </div>
                            <div class="col-md-12"><hr></div>
                            <div class="form-group-sm col-md-2" style="float: right;">
                                <input type="submit" class="btn btn-info btn-sm" value="OK" style="width: 65px">
                                <input type="button" class="btn btn-danger btn-sm" value="Annulla" style="width: 65px" onclick="window.location = '{{url('/ana-associazione/1')}}'">
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection