@extends('adminlte::layouts.app')
@section('htmlheader_title', 'Anagrafica Associato')
@section('contentheader_title', 'Anagrafica Associato')
@section('contentheader_description', '')

@section('main-content')
    <div class="container-fluid">
        <div class="container-fluid spark-screen">
            <div class="row">
                <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Dati Anagrafici</h3>
                            <div style="float: right">
                                <label class="label text-black" for="attivo">Attivo</label>
                                <input disabled <?php echo $ana->attivo ? 'checked="checked"' : '' ?> name="attivo" id="attivo" type="checkbox" value="{{ $ana->attivo  }}">
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="">
                                <div class="form-group-sm col-md-6">
                                    <label class="label text-black" for="cognome">Cognome</label>
                                    <input disabled type="text" value="{{ $ana->cognome }}" class="form-control text-blue" id="cognome" name="cognome">
                                </div>
                                <div class="form-group-sm col-md-6">
                                    <label class="label text-black" for="nome">Nome</label>
                                    <input disabled type="text" value="{{ $ana->nome }}" class="form-control text-blue" id="nome" name="nome">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group-sm col-md-5">
                                    <label class="label text-black" for="indirizzo">Indirizzo</label>
                                    <input disabled type="text" value="{{ $ana->indirizzo  }}" class="form-control text-blue" id="indirizzo" name="indirizzo">
                                </div>
                                <div class="form-group-sm col-md-1">
                                    <label class="label text-black" for="cap">Cap</label>
                                    <input disabled type="text" value="{{ $ana->cap }}" class="form-control text-blue" id="cap" name="cap">
                                </div>
                                <div class="form-group-sm col-md-5">
                                    <label class="label text-black" for="localita">Localit&agrave</label>
                                    <input disabled type="text" value="{{ $ana->localita }}" class="form-control text-blue" id="localita" name="localita">
                                </div>
                                <div class="form-group-sm col-md-1">
                                    <label class="label text-black" for="provincia">Prov.</label>
                                    <input disabled type="text" value="{{ $ana->provincia }}" class="form-control text-blue" id="provincia" name="provincia">
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group-sm col-md-4">
                                    <label class="label text-black" for="codicefiscale">Codice Fiscale</label>
                                    <input disabled type="text" value="{{ $ana->codicefiscale }}" class="form-control text-blue" id="codicefiscale" name="codicefiscale">
                                </div>
                                <div class="form-group-sm col-md-2">
                                    <label class="label text-black" for="datanascita">Data Nascita</label>
                                    <input disabled type="date" value="{{ $ana->datanascita }}" class="form-control text-blue" id="datanascita" name="datanascita">
                                </div>
                                <div class="form-group-sm col-md-5">
                                    <label class="label text-black" for="luogonascita">Luogo di Nascita</label>
                                    <input disabled type="text" value="{{ $ana->luogonascita }}" class="form-control text-blue" id="luogonascita" name="luogonascita">
                                </div>
                                <div class="form-group-sm col-md-1">
                                    <label class="label text-black" for="provincianascita">Prov. Nasc.</label>
                                    <input disabled type="text" value="{{ $ana->provincianascita }}" class="form-control text-blue" id="provincianascita" name="provincianascita">
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
                                    <input disabled type="text" value="{{ $ana->codicegarista }}" class="form-control text-blue" id="codicegarista" name="codicegarista">
                                </div>
                                <div class="form-group-sm col-md-2">
                                    <label class="label text-black" for="nlicenza">N° Licenza</label>
                                    <input disabled type="text" value="{{ $ana->nlicenza }}" class="form-control text-blue" id="nlicenza" name="nlicenza">
                                </div>
                                <div class="form-group-sm col-md-2">
                                    <label class="label text-black" for="datascadlicenza">Data Scadenza Licenza</label>
                                    <input disabled type="date" value="{{ $ana->datascadlicenza }}" class="form-control text-blue" id="datascadlicenza" name="datascadlicenza">
                                </div>
                                <div class="form-group-sm col-md-3">
                                    <label class="label text-black" for="ntesseraagonista">N° Tessera Agonista</label>
                                    <input disabled type="text" value="{{ $ana->ntesseraagonista }}" class="form-control text-blue" id="ntesseraagonista" name="ntesseraagonista">
                                </div>
                                <div class="form-group-sm col-md-3">
                                    <label class="label text-black" for="ntesserafipsas">N° Tessera FIPSAS</label>
                                    <input disabled type="text" value="{{ $ana->ntesserafipsas }}" class="form-control text-blue" id="ntesserafipsas" name="ntesserafipsas">
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <div class="form-group-sm col-md-1" style="float: right">
                                <input type="button" class="btn btn-danger btn-sm" value="Esci" style="width: 65px" onclick="window.location = '{{url('/ana-associati')}}'">
                            </div>
                            <div class="form-group-sm col-md-1" style="float: right;">
                                <input type="button" class="btn btn-info btn-sm" value="Modifica" style="width: 65px" onclick="window.location = '{{url('/ana-associati/' . $ana->id . '/edit')}}'">
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
