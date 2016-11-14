@extends('adminlte::layouts.app')
@section('htmlheader_title', 'Anagrafica Associato')
@section('contentheader_title', 'Anagrafica Associato')
@section('contentheader_description', '')

@section('main-content')
<div class="container-fluid">
    <div class="container-fluid spark-screen">
        <div class="row">
            {!! Form::model($ana, [
                    'method' => 'PATCH',
                    'url' => ['/ana-associati', $ana->id],
                    'class' => 'form-horizontal',
                    'role' => 'form',
                    'enctype' => 'multipart/form-data'
                ]) !!}
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dati Anagrafici</h3>
                        <div style="float: right">
                            <label class="label text-black" for="attivo">Attivo</label>
                            <input <?php echo $ana->attivo ?? old('attivo') ? 'checked="checked"' : '' ?> name="attivo" id="attivo" type="checkbox" value="{{ $ana->attivo ?? old('attivo') }}" onclick="$(this).val(this.checked ? 1 : 0)">
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="">
                            <div class="form-group-sm col-md-6">
                                <label class="label text-black" for="cognome">Cognome</label>
                                <input type="text" value="{{ $ana->cognome ?? old('cognome') }}" class="form-control text-blue" id="cognome" name="cognome">
                            </div>
                            <div class="form-group-sm col-md-6">
                                <label class="label text-black" for="nome">Nome</label>
                                <input type="text" value="{{ $ana->nome ?? old('nome') }}" class="form-control text-blue" id="nome" name="nome">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group-sm col-md-5">
                                <label class="label text-black" for="indirizzo">Indirizzo</label>
                                <input type="text" value="{{ $ana->indirizzo ?? old('indirizzo') }}" class="form-control text-blue" id="indirizzo" name="indirizzo">
                            </div>
                            <div class="form-group-sm col-md-1">
                                <label class="label text-black" for="cap">Cap</label>
                                <input type="text" value="{{ $ana->cap ?? old('cap') }}" class="form-control text-blue" id="cap" name="cap">
                            </div>
                            <div class="form-group-sm col-md-5">
                                <label class="label text-black" for="localita">Localit&agrave</label>
                                <input type="text" value="{{ $ana->localita ?? old('localita') }}" class="form-control text-blue" id="localita" name="localita">
                            </div>
                            <div class="form-group-sm col-md-1">
                                <label class="label text-black" for="provincia">Prov.</label>
                                <input type="text" value="{{ $ana->provincia ?? old('provincia') }}" class="form-control text-blue" id="provincia" name="provincia">
                            </div>
                        </div>
                        <div class="">
                            <div class="form-group-sm col-md-4">
                                <label class="label text-black" for="codicefiscale">Codice Fiscale</label>
                                <input type="text" value="{{ $ana->codicefiscale ?? old('codicefiscale') }}" class="form-control text-blue" id="codicefiscale" name="codicefiscale">
                            </div>
                            <div class="form-group-sm col-md-2">
                                <label class="label text-black" for="datanascita">Data Nascita</label>
                                <input type="date" value="{{ $ana->datanascita ?? old('datanascita') }}" class="form-control text-blue" id="datanascita" name="datanascita">
                            </div>
                            <div class="form-group-sm col-md-5">
                                <label class="label text-black" for="luogonascita">Luogo di Nascita</label>
                                <input type="text" value="{{ $ana->luogonascita ?? old('luogonascita') }}" class="form-control text-blue" id="luogonascita" name="luogonascita">
                            </div>
                            <div class="form-group-sm col-md-1">
                                <label class="label text-black" for="provincianascita">Prov. Nasc.</label>
                                <input type="text" value="{{ $ana->provincianascita ?? old('provincianascita') }}" class="form-control text-blue" id="provincianascita" name="provincianascita">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Dati Tessere</h3>
                    </div>
                    <div class="box-body">
                        <div class="">
                            <div class="form-group-sm col-md-2">
                                <label class="label text-black" for="codicegarista">Codice Garista</label>
                                <input type="text" value="{{ $ana->codicegarista ?? old('codicegarista') }}" class="form-control text-blue" id="codicegarista" name="codicegarista">
                            </div>
                            <div class="form-group-sm col-md-2">
                                <label class="label text-black" for="nlicenza">N° Licenza</label>
                                <input type="text" value="{{ $ana->nlicenza ?? old('nlicenza') }}" class="form-control text-blue" id="nlicenza" name="nlicenza">
                            </div>
                            <div class="form-group-sm col-md-2">
                                <label class="label text-black" for="datascadlicenza">Data Scadenza Licenza</label>
                                <input type="date" value="{{ $ana->datascadlicenza ?? old('datascadlicenza') }}" class="form-control text-blue" id="datascadlicenza" name="datascadlicenza">
                            </div>
                            <div class="form-group-sm col-md-3">
                                <label class="label text-black" for="ntesseraagonista">N° Tessera Agonista</label>
                                <input type="text" value="{{ $ana->ntesseraagonista ?? old('ntesseraagonista') }}" class="form-control text-blue" id="ntesseraagonista" name="ntesseraagonista">
                            </div>
                            <div class="form-group-sm col-md-3">
                                <label class="label text-black" for="ntesserafipsas">N° Tessera FIPSAS</label>
                                <input type="text" value="{{ $ana->ntesserafipsas ?? old('ntesserafipsas') }}" class="form-control text-blue" id="ntesserafipsas" name="ntesserafipsas">
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <div class="form-group-sm col-md-1" style="float: right">
                            <input type="button" class="btn btn-danger btn-sm" value="Annulla" style="width: 65px" onclick="window.location = '{{url('/ana-associati')}}'">
                        </div>
                        <div class="form-group-sm col-md-1" style="float: right;">
                            <input type="submit" class="btn btn-info btn-sm" value="OK" style="width: 65px">
                        </div>
                    </div>
                </div>
                <div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection