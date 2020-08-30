<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Granja;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animals = Animal::all();                 
        return view('llistatAnimals', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $granjes = Granja::all();
        return view('altaAnimal', compact('granjes'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                            
        $rutaImg = $this->recollirImatgeVedella($request);
        $afegir = $this->comprovarCrotalExplotacioRepetits($request);
        
        if(!$rutaImg){
            return $this->create();
        }
        
        if($afegir){
            
            $animal = new Animal($_POST);
            $animal->Ruta_Imatge = $rutaImg;
                        
            Animal::insert($animal->attributesToArray());
            
            \Session::put("success_message", "S'ha donat d'alta al animal amb éxit.");
            return $this->create(); 
        }
        else return $this->create();      
    }
    
    //funcio per comprovar, abans d'afegir una vedella, de que el nºcrotal i d'explotacio no estiguin ja en ús
    //la funcio també afegeix al $_SESSION un dels 3 missatges d'error
    private function comprovarCrotalExplotacioRepetits($request){
        
        $animals = Animal::all();      
        $explotacio = $request->input('N_Explotacio');
        $crotal = $request->input('N_DARP'); 
        $afegir = true;
        
        //recorrer tots els animals de la taula, per comprovar que els numeros de crotal i d'explotacio que 
        //venen del formulari, no estiguin en ús ja en la taula (perque son UNIQUE els dos).
        foreach($animals as $animal){          
            $animalCrotal = $animal->N_DARP;
            $animalExplotacio = $animal->N_Explotacio;
            
            if($explotacio == $animalExplotacio && $crotal == $animalCrotal){
                \Session::put("error_message", "El Nº de crotal i d'explotació ja estan en ús.");
                $afegir = false;
            } 
            else if($crotal == $animalCrotal){
                \Session::put("error_message", "Aquest Nº de crotal ja esta en ús.");
                $afegir = false;
            } 
            else if($explotacio == $animalExplotacio){
                \Session::put("error_message", "Aquest NºExplotacio ja esta en ús.");
                $afegir = false;
            }
        }        
        //retornar si podem afegir l'animal o no
        return $afegir;
    }
    
    //funcio per recollir l'imatge de la vedella que be del formulari d'alta animal
    private function recollirImatgeVedella($request){
        
        $nom_a_desar;
            
        //el fitxer pujat be dins del $request, mirar si en el request hi ha alguna imatge
        if($request->hasFile('Ruta_Imatge')){
            
            //recuperar nom amb extensio
            $nomAmbExtensio = $request->file('Ruta_Imatge')->getClientOriginalName();
                        
            //recuperar nom
            $nom = pathinfo($nomAmbExtensio, PATHINFO_FILENAME);
            
            //recuperar extensio
            $extensio = $request->file('Ruta_Imatge')->getClientOriginalExtension();
            
            
            if(!$this->comprovarExtensio($extensio)){
                \Session::put("error_message", "Nomes s'accepten imatges! (png, jpg, jpeg)");
                return false;
            }
            
            //fem servir la funcio time, de manera que el nom de cada imatge de vedella sera completament unic, aixi evitem problemes
            $nom_a_desar = $nom.'_'.time().'.'.$extensio;
            
            //desar imatge a carpeta del servidor
            $path = $request->file('Ruta_Imatge')->storeAs('public/vedellesIMG', $nom_a_desar);
            
            //dd("nom amb extensio:".$nomAmbExtensio." || nom:".$nom." || extensio:".$extensio." || nom a desar:".$nom_a_desar." || path:".$path);
            
        }else{
            $nom_a_desar = 'defaultVedella/defaultCalf2.jpg';
        }
        
        //finalment retornar l'string que s'ha de pujar al registre del nou animal (camp: Ruta_Imatge)
        return $nom_a_desar;
    }
    
    private function comprovarExtensio($extensio){
        
        switch($extensio){
            case "PNG":
                return true;
                break;
            case "png":
                return true;
                break;
            case "JPEG":
                return true;
                break;
            case "jpeg":
                return true;
            case "JPG":
                return true;
                break;
            case "jpg":
                return true;
                break;
        }
    
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($animalID)
    {                
        $animal = Animal::where('ID', $animalID)->first();
        $granja = Granja::where('ID', $animal->ID_GRANJA)->first();
                       
        return view('detallAnimal', compact('animal'), compact('granja'));
    }
    
    public function searchAnimal(){
        
        $nExplot = $_POST['valorCerca'];    
        $animal = Animal::where('N_Explotacio', $nExplot)->first();
                       
        if( !is_null($animal)){
            $granja = Granja::where('ID', $animal->ID_GRANJA)->first();
            return view('detallAnimal', compact('animal'), compact('granja'));
        }
        else return view('main');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
