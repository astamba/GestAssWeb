<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\AnaAssociazione;
use Illuminate\Http\Request;
use Session;

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

        return redirect('ana-associazione');
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
        $anaassociazione->update($request->all());

        Session::flash('flash_message', 'AnaAssociazione updated!');

        return redirect('ana-associazione');
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
}
