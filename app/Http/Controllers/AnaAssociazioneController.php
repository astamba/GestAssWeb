<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AnaAssociazione;
use Illuminate\Http\Request;
use Session;
use App\Http\Controllers\Debugbar;

class AnaAssociazioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $anaassociazione = AnaAssociazione::paginate(15);

        return view('ana-associazione.index', compact('anaassociazione'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('ana-associazione.create');
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
        
        AnaAssociazione::create($request->all());

        Session::flash('flash_message', 'AnaAssociazione added!');

        return redirect('ana-associazione/1');
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
        $anaassociazione = AnaAssociazione::findOrFail($id);

        return view('ana-associazione.show', compact('anaassociazione'));
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
        $anaassociazione = AnaAssociazione::findOrFail($id);

        return view('ana-associazione.edit', compact('anaassociazione'));
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
        $anaassociazione = AnaAssociazione::findOrFail($id);
        $logo = $request->file('logo');
        if ($logo != null){
            $contents = $logo->openFile()->fread($logo->getSize());
            $anaassociazione->logo = $contents;
        }
        $anaassociazione->associazione = $request->associazione;
        $anaassociazione->cap = $request->cap;
        $anaassociazione->indirizzo = $request->indirizzo;
        $anaassociazione->indirizzo2 = $request->indirizzo2;
        $anaassociazione->localita = $request->localita;
        $anaassociazione->presidente = $request->presidente;
        $anaassociazione->provincia = $request->provincia;

        $anaassociazione->save();

        Session::flash('flash_message', 'AnaAssociazione updated!');

        return redirect('ana-associazione/1');
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

        Session::flash('flash_message', 'AnaAssociazione deleted!');

        return redirect('ana-associazione');
    }

    public  function logo()
    {
        $ana = AnaAssociazione::findOrFail(1);

        return response()->make($ana->logo, 200, array(
            'Content-Type' => ("Content-type: image/jpeg")));
    }
}
