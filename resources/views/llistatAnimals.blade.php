@extends('partials.template')



@section('content')
@inject('carbon', 'Carbon\Carbon')
            <div class="row">
                
                <link rel="stylesheet" href="{{asset('css/llistatAnimals.css')}}">
                
                <!-- left -->
                <div class="col-12 col-md-6 mt-1 mb-2 rounded pt-1 fadeIn">
                    
                    
                    <div id="listContainer" class="transparentBackgroung bg-light p-3 mt-1 rounded">
                        
                        <h2 class="text-center text-dark">Llistat d'animals</h2>
                        
                        <div id="contenidorFiltre" class="bg-white p-1 m-3 mb-5 rounded">
          
                           <table class="table table-bordered text-center mb-0">                                               
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col"><h6 class="text-center text-white">FILTRAR PER NºEXPLOTACIÓ</h6></th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-light">
                                        <tr>
                                            <td class="text-dark">
                                                <input min="1" type="number" name="filtre" id=filtre class="shadow m-3 text-center w-75 p-2 rounded border bg-white text-dark" placeholder="Entrar el Nºexplotació aquí">
                                            </td>
                                        </tr>
                                    </tbody>                                                                                     
                            </table>
                           
                        </div>  
                        
                        <h4 class="text-center bg-warning p-2 rounded">Fer click a una de les vedelles per veure'n tota l'informació</h4>
                        
                        <ul id="animalsList" class="rounded overflow-auto list-group p-1 bg-dark" style="height: 708px">
                            
                            
                            
                            <!-- element llista animals -->
                            @foreach($animals as $key => $animal)                               
                                    <li id="darp_animal_{{$key}}" class="animalListItem m-1 row d-flex justify-content-between rounded list-group-item p-1 m-1 border border-dark bg-success " >

                                        <form id="detailForm_{{$key}}" method="GET" action="{{route('Animal.show', $animal->ID)}}" style="display: none; pointer-events: none;">
                                            
                                        </form>
                                        
                                        <!-- primer -->
                                        <div style="pointer-events: none;" class="bg-dark col-sm-12 col-md-4 d-flex justify-content-center mb-1">
                                            
                                            
                                            @if($animal->Ruta_Imatge == null || $animal->Ruta_Imatge == 'defaultCalf2.jpg')   
                                                <img src="{{asset('storage/vedellesIMG/defaultVedella/defaultCalf2.jpg')}}" alt="" class="d-block m-auto m-1 img-thumbnail" style="width: 128px; height: 128px;">                       
                                            @else
                                                <img src="{{asset('storage/vedellesIMG/'.$animal->Ruta_Imatge)}}" alt="" class="d-block m-auto m-1 img-thumbnail" style="width: 128px; height: 128px;">  
                                            @endif    
                                                
                                        </div>
                                        
                                        <!-- SEGON -->
                                        <div class="col-sm-12 col-md-4" style="pointer-events: none;">
                                            
                                            <table class="table table-bordered text-center">
                                                
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Pes</th>
                                                            <th scope="col">Contorn</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-light">
                                                        <tr>
                                                            <td id="pes_td_{{$key}}" class="text-dark">{{$animal->Pes_Actual}}</td>
                                                            <td class="text-dark">{{$animal->Contorn_Centimetres}}</td>
                                                        </tr>
                                                    </tbody>
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th scope="col">(kg)</th>
                                                            <th scope="col">(cm)</th>
                                                        </tr>
                                                    </thead>                                                   
                                            </table>
                                            
                                        </div>
                                        
                                                                               
                                        <!-- TERCER -->
                                        <div class="col-sm-12 col-md-4" style="pointer-events: none;">
                                            
                                            <table class="table table-bordered text-center">
                                                
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Edat</th>
                                                        <th scope="col">NºExplotació</th>                                                          
                                                    </tr>
                                                </thead>
                                                
                                                <tbody class="bg-light">
                                                    <tr>
                                                        <td id="edat_td_{{$key}}" class="text-dark">{{ $animal->Data_Naixement }}</td>
                                                        <td id="explotacio_td_{{$key}}" class="text-dark">{{$animal->N_Explotacio}}</td>                                                       
                                                    </tr>
                                                </tbody>    
                                                
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col">(mesos)</th>
                                                        <th scope="col" style="display: none;">
                                                           
                                                                <button class="m-0 btn btn-block btn-primary">Detalls</button>
                                                           
                                                        </th>                                                     
                                                    </tr>
                                                </thead>  
                                                
                                            </table>
                                            
                                        </div>
                                        

                                    </li>
                               @endforeach
                            
                            
                            
                            
                                                                                                                                                                 
                        </ul>
                        
                        <!-- here -->
                        
                    </div>
                    
                    
                </div>
                
                <!-- right -->
                <div class="col-sm-12 col-md-6 mt-1 rounded fadeIn">
                    
                    <div id="rightContent" class=" d-flex flex-column align-items-around w-100">
                        
                        <div id="contenidorTaula" class="">

                           <h2 class="text-center">Taula Edat-Pes</h2>
                                
                           <table class="table mb-0" id="pesContornTable">
                              <thead class="thead-dark">
                                <tr>
                                  <th scope="col" class="text-center">Edat</th>
                                  <th scope="col" class="text-center">Perímetre torax</th>
                                  <th scope="col" class="text-center">Altura creu</th>
                                  <th scope="col" class="text-center">Pes</th>
                                </tr>
                              </thead>
                              <tbody class="opacity-5">
                                <tr class="text-center">
                                  <td>1</td>
                                  <td>75</td>
                                  <td>80</td>
                                  <td>45-50</td>
                                </tr>
                                <tr class="text-center">
                                  <td>2</td>
                                  <td>85</td>
                                  <td>87</td>
                                  <td>85-90</td>
                                </tr>
                                <tr class="text-center">
                                  <td>3</td>
                                  <td>100</td>
                                  <td>93</td>
                                  <td>105-115</td>
                                </tr>
                                <tr class="text-center">
                                  <td>4</td>
                                  <td>110</td>
                                  <td>97</td>
                                  <td>140</td>
                                </tr>                                                     
                              </tbody>
                              <thead class="thead-light">
                                <tr class="text-center">
                                  <th scope="col">(mesos)</th>
                                  <th scope="col">(cm)</th>
                                  <th scope="col">(cm)</th>
                                  <th scope="col">(kg)</th>
                                </tr>
                              </thead>
                            </table>

                            
                       
                        </div>
                        
                    </div>
                    
                </div>
                          
                <!-- JS FILTRE ANIMALS -->
                <script type="text/javascript" src="{{asset('js/llistatAnimals/filtreLlistatAnimals.js')}}"></script>
                
                <!-- JS ALERTA VISUAL PER/EDAT AINMAL-->
                <script type="text/javascript" src="{{asset('js/llistatAnimals/alertesPesEdatLlistatAnimals.js')}}"></script>
                
                <!-- JS CALCULAR L'EDAT EN MESOS DELS ANIMALS DE LA LLISTA-->
                <script type="text/javascript" src="{{asset('js/llistatAnimals/calculEdat.js')}}"></script>
                
                <!-- JS FER ELS ELEMENTS DE LA LLISTA D'ANIMALS CLICABLES (que redireccionin a la pagina de detall animal del animal clicat) -->
                <script type="text/javascript" src="{{asset('js/llistatAnimals/animaListClicks.js')}}"></script>
                
                
            </div>
@endsection

