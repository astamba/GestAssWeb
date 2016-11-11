<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AnaAssociati;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Debugbar;

class AnaAssociatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $ana = AnaAssociati::paginate(15);

        return view('ana-associati.index', compact('ana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ana-associati.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        AnaAssociati::create($request->all());

        Session::flash('flash_message', 'AnaAssociati added!');

        return redirect('ana-associati');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ana = AnaAssociati::findOrFail($id);

        return view('ana-associati.show', compact('ana'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $ana = AnaAssociati::findOrFail($id);

        return view('ana-associati.edit', compact('anaassociati'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $ana = AnaAssociati::findOrFail($id);
        $avatar = $request->file('avatar');
        if ($avatar != null){
            $contents = $avatar->openFile()->fread($avatar->getSize());
            $ana->logo = $contents;
        }

        $ana->cap = $request->cap;
        $ana->codicefiscale = $request->codicefiscale;
        $ana->codicegarista = $request->codicegarista;
        $ana->cognome = $request->cognome;
        $ana->datanascita = $request->datanascita;
        $ana->datascadlicenza = $request->datascadlicenza;
        $ana->indirizzo = $request->indirizzo;
        $ana->localita = $request->localita;
        $ana->nlicenza = $request->nlicenza;
        $ana->nome = $request->nome;
        $ana->ntesseraagonista = $request->ntesseraagonista;
        $ana->ntesserafipsas = $request->ntesserafipsas;
        $ana->provincia = $request->provincia;

        $ana->save();

        Session::flash('flash_message', 'AnaAssociati updated!');

        return redirect('ana-associati');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        AnaAssociazione::destroy($id);

        Session::flash('flash_message', 'AnaAssociati deleted!');

        return redirect('ana-associati');
    }

    public  function avatar()
    {
        $ana = AnaAssociati::findOrFail(1);

        return response()->make($ana->avatar, 200, array(
            'Content-Type' => ("Content-type: image/jpeg")));
    }
}
