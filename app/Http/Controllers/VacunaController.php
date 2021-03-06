<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacuna;

class VacunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vacunes = Vacuna::all();
        return view('vacunes', compact('vacunes'));
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
        $primera = $_POST["DiesPrimeraDosi"];
        $periode = $_POST["DiesPeriode"];                      
        
        $selectPrimera = $_POST["select_primera_dosi"];
        $selectPeriode = $_POST["select_periode_dosi"];
        $multiplicador = 30.417;
        
        if($selectPrimera == "m"){
            $primera = intval($primera * $multiplicador);
            $_POST["DiesPrimeraDosi"] = $primera;
        }
                    
        if($selectPeriode == "m"){
            $periode = intval($periode * $multiplicador);
            $_POST["DiesPeriode"] = $periode;
        }
        
        unset($_POST["select_primera_dosi"]);
        unset($_POST["select_periode_dosi"]);
        
        $v = new Vacuna($_POST);
        Vacuna::insert($v->attributesToArray());
        return $this->index();
    }
    
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vacuna::where('ID', $id)->delete();
        return $this->index();
    }
}
