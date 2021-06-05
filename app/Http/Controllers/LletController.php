<?php

namespace App\Http\Controllers;

use App\Llet;
use Illuminate\Http\Request;

class LletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $llets = Llet::all(); 
        return view('altaLlet', compact('llets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $llet = new Llet($_POST);
        
        if($llet->Tipus == "Liquida") $llet->Unitat = "L";
        else if ($llet->Tipus == "En pols") $llet->Unitat = "Kg";
        
        Llet::insert($llet->attributesToArray());
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Llet  $llet
     * @return \Illuminate\Http\Response
     */
    public function show(Llet $llet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Llet  $llet
     * @return \Illuminate\Http\Response
     */
    public function edit(Llet $llet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Llet  $llet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Llet $llet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Llet  $llet
     * @return \Illuminate\Http\Response
     */
    public function destroy($lletID)
    {
        Llet::where('ID', $lletID)->delete();
        return $this->index();
    }
}
