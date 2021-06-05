<?php

namespace App\Http\Controllers;

use App\Pinso;
use Illuminate\Http\Request;

class PinsoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $pinsos = Pinso::all(); 
        return view('altaPinso', compact('pinsos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        return view('altaPinso');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $pinso = new Pinso($_POST);
        Pinso::insert($pinso->attributesToArray());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pinso  $pinso
     * @return \Illuminate\Http\Response
     */
    public function show(Pinso $pinso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pinso  $pinso
     * @return \Illuminate\Http\Response
     */
    public function edit(Pinso $pinso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pinso  $pinso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pinso $pinso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pinso  $pinso
     * @return \Illuminate\Http\Response
     */
    public function destroy($pinsoID)
    {
        Pinso::where('ID', $pinsoID)->delete();
        return $this->index();
    }
}
