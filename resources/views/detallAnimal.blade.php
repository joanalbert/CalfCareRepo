@extends('partials.template')



@section('content')
<link rel="stylesheet" href="{{asset('css/detallAnimal.css')}}">
<link rel="stylesheet" href="{{asset('css/fadeIn.css')}}">
<link rel="stylesheet" href="{{asset('css/transparency.css')}}">


<!-- page content-->
        <div class="container-fluid mt-5 shadow mb-5 mt-5 fadeIn">
            <div class="row mt-2">
                
                <div id="left "class="col-sm-12 col-md-6 text-center transparentBackgroungTransp">
                    
                    <div class="d-flex flex-column align-items-center">
                        
                        <div id="explotacio_container" class="bg-dark border border-white w-50 m-3">
                            <h2 id="explotacio" class="text-white w-100 m-auto p-3">Nº{{$animal->N_Explotacio}}</h2>
                        </div>
                        
                        <div class="d-flex justify-content-center">
                                                        
                            @if($animal->Ruta_Imatge == null || $animal->Ruta_Imatge == 'defaultCalf2.jpg')   
                                <img src="{{asset('storage/vedellesIMG/defaultVedella/defaultCalf2.jpg')}}" alt="" class="m-3 img-fluid img-thumbnail">                       
                            @else
                                <img src="{{asset('storage/vedellesIMG/'.$animal->Ruta_Imatge)}}" alt="" class="m-3 img-fluid img-thumbnail" style="max-width: 1000px; max-height: 500px;">  
                            @endif  
                            
                        </div>
                        
                        <div>
                            <button class="m-3 btn btn-dark text-white border border-white p-3">Mostrar históric consum de la vedella</button>
                        </div>
                        
                    </div>
                    
                </div>
                
                <div id="right" class="col-sm-12 col-md-6 text-center d-flex flex-column align-content-center">
                    
                    <div class="p-3 h-100 d-flex flex-column align-items-center justify-content-center transparentBackgroungTransp">
                        
                        <!-- TOP DIV-->
                        <div class="h-50 d-flex flex-wrap justify-content-center p-2 mb-2">
                            
                            <label for="granja" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Granja <br>
                                <input id="granja" readonly type="text" value="{{$granja->NomExplotacio}}" class="form-control bg-white">
                            </label>
                            
                            
                            <label for="explotacio" class=" p-2 rounded text-center text-success font-weight-bold "> 
                                NºExplotació <br>
                                <input id="explotacio" readonly type="number" value="{{$animal->N_Explotacio}}" class="form-control bg-white">
                            </label>
                            
                            <label for="explotacio" class=" p-2 rounded text-center text-success font-weight-bold "> 
                                NºDarp <br>
                                <input id="explotacio" readonly type="number" value="{{$animal->N_DARP}}" class="form-control bg-white">
                            </label>
                            
                            <label for="pesAct" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Pes actual <br>
                                <input id="pesAct" readonly type="number" value="{{$animal->Pes_Actual}}" class="form-control bg-white">
                            </label> 
                        </div>
                        
                        <!-- MIDDLE DIV-->
                        <div class="h-50 d-flex flex-wrap justify-content-center p-2 mb-2 ">
                            
                            <!--
                            <label for="perimetreTorax" class="shadow p-2 rounded text-center text-success font-weight-bold"> 
                                Perímetre torax <br>
                                <input id="perimetreTorax" readonly type="number" value="" class="form-control bg-white">
                            </label>
                            -->
                                                       
                            <label for="contorn_cm" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Contorn cm <br>
                                <input id="contorn_cm" readonly type="number" value="{{$animal->Contorn_Centimetres}}" class="form-control bg-white">
                            </label>
                            
                            
                            <label for="lCalostra" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Litres Calostre <br>
                                <input id="lCalostra" readonly type="number" value="{{$animal->Litres_Calostra}}" class="form-control bg-white">
                            </label>
                            
                                
                            <label for="cremadaBanyes" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Metode cremada <br>
                                <input id="cremadaBanyes" readonly type="text" value="{{$animal->Metode_Cremada}}" class="form-control bg-white">
                            </label>
                            
                            <label for="presesCalostra" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Preses Calostre <br>
                                <input id="presesCalostra" readonly type="number" value="{{$animal->Preses_Calostra}}" class="form-control align-self-start bg-white">
                            </label>
                        </div>
                        
                                               
                        <!-- BOTTOM DIV-->
                        <div class="h-50 d-flex flex-wrap justify-content-center p-2 mb-2">
                            <label for="dNaixement" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Data Naixement <br>
                                <input id="dNaixement" readonly type="date" value="{{$animal->Data_Naixement}}" class="bg-white form-control">
                            </label>
                            
                            @if($animal->Data_Mort == null)
                                <label for="dMort" class="p-2 rounded text-center text-success font-weight-bold"> 
                                    Data Mort <br>
                                    <input id="dMort" readonly type="text" value="-- -- --" disabled readonly class="form-control">
                                </label>
                            @else
                                <label for="dMort" class="p-2 rounded text-center text-success font-weight-bold"> 
                                    Data Mort <br>
                                    <input id="dMort" readonly type="date" value="{{$animal->Data_Mort}}" class="form-control bg-white">
                                </label>
                            @endif
                            
                            <label for="dDeslletament" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Data Deslletament <br>
                                <input id="dDeslletament" readonly type="date" value="{{$animal->Data_Deslletament}}" class="form-control bg-white">
                            </label>
                                
                            <label for="dCremadaBanyes" class="p-2 rounded text-center text-success font-weight-bold"> 
                                Data Cremada Banyes <br> 
                                <input id="dCremadaBanyes" readonly type="date" value="{{$animal->Data_Cremada_Banyes}}" class="form-control bg-white">
                            </label>
                        </div>
                        
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
        <!-- END page content-->
@endsection