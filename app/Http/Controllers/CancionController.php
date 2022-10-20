<?php

namespace App\Http\Controllers;

use App\Models\Cancion;
use Illuminate\Http\Request;

class CancionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $canciones = Cancion::all();
        return view('cancion.index', ['activeCancion' => 'active', 
                                      'canciones'      => $canciones,
                                      'subTitle'      => 'Canciones - Index',
                                      'table'         => 'cancion']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cancion.create', [ 'activeCancion' => 'active',
                                        //'cancion' => $cancion,
                                        'subTitle' => 'Canciones - Create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cancion = new Cancion($request->all());
        $cancion->save();
        return redirect('cancion');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function show(Cancion $cancion)
    {
        //$cancion = Cancion::find($id); //Request $request, cancion $cancion sustituye esto, si falla, se deja request y $id y se descomenta esto.
        return view('cancion.show', [ 'activeCancion' => 'active',
                                      'cancion' => $cancion,
                                      'subTitle' => 'Canciones - Show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function edit(Cancion $cancion)
    {
        return view('cancion.edit', [ 'activeCancion' => 'active', 
                                      'cancion' => $cancion,
                                      'subTitle' => 'Canciones - Edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cancion $cancion)
    {
        $cancion->update($request->all());
        return view('cancion.update', [ 'activeCancion' => 'active', 
                                        'id' => $id, 
                                        'name' => $request->input('name'), 
                                        'subTitle' => 'Canciones - Update']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cancion  $cancion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cancion $cancion)
    {
        $cancion->delete();
        return redirect('/cancion');
    }
}
