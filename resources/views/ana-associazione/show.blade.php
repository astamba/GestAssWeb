@extends('adminlte::layouts.app')
@section('htmlheader_title', 'Anagrafica Associazione')
@section('contentheader_title', 'Anagrafica Associazione')
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
                    <div class="box box-body">
                        <div style="float: right;" class="form-group-sm col-md-3">
                            <label class="label text-black" for="logo">Logo</label>
                            <img src="{{ asset('/ana-associazione/logo') }}">
                        </div>
                        <div class="row">
                            <div class="form-group-sm col-md-8">
                                <label class="label text-black" for="associazione">Associazione</label>
                                <input disabled type="text" value="{{$anaassociazione->associazione}}" class="form-control text-blue" id="associazione">
                            </div>
                            <div class="form-group-sm col-md-8">
                                <label class="label text-black" for="indirizzo">Indirizzo</label>
                                <input disabled type="text" value="{{$anaassociazione->indirizzo}}" class="form-control text-blue" id="indirizzo">
                            </div>
                            <div class="form-group-sm col-md-8">
                                <label class="label text-black" for="indirizzo2">Indirizzo 2</label>
                                <input disabled type="text" value="{{$anaassociazione->indirizzo2}}" class="form-control text-blue" id="indirizzo2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group-sm col-md-2">
                                <label class="label text-black" for="cap">Cap</label>
                                <input disabled type="text" value="{{$anaassociazione->cap}}" class="form-control text-blue" id="cap">
                            </div>
                            <div class="form-group-sm col-md-9">
                                <label class="label text-black" for="localita">Localit&agrave</label>
                                <input disabled type="text" value="{{$anaassociazione->localita}}" class="form-control text-blue" id="localita">
                            </div>
                            <div class="form-group-sm col-md-1">
                                <label class="label text-black" for="provincia">Prov.</label>
                                <input disabled type="text" value="{{$anaassociazione->provincia}}" class="form-control text-blue" id="provincia">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group-sm col-md-12">
                                <label class="label text-black" for="presidente">Presidente</label>
                                <input disabled type="text" value="{{$anaassociazione->presidente}}" class="form-control text-blue" id="presidente" name="presidente">
                            </div>
                        </div>
                        <div class="col-md-12"><hr></div>
                        <div class="form-group-sm col-md-2" style="float: right;">
                            <input type="button" class="btn btn-info btn-sm" value="Modifica" style="width: 70px" onclick="window.location = '{{url('/ana-associazione/1/edit')}}'">
                            <input type="button" class="btn btn-danger btn-sm" value="Esci" style="width: 70px" onclick="window.location = '{{url('/home')}}'">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="table-responsive">--}}
        {{--<table class="table table-bordered table-striped table-hover">--}}
            {{--<tbody>--}}
                {{--<tr>--}}
                    {{--<th>ID</th><td>{{ $anaassociazione->id }}</td>--}}
                {{--</tr>--}}
                {{----}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}

</div>
@endsection
