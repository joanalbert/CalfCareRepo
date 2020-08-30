@extends('partials.template')





@section('content')

@if(\Session::has('error_message'))
    <div class="container-fluid mt-4">
        @include('partials.missatgeError')
    </div>

    <!-- FORGET HERE -->
    <?php  Session::forget('error_message'); ?>
        
@endif

@if(\Session::has('success_message'))
    <div class="container-fluid mt-4">
        @include('partials.missatgeCorrecte')
    </div>

    <!-- FORGET HERE -->
    <?php Session::forget('success_message'); ?>
    
@endif

<div class="container fadeIn">
    
       
    <div class="row mt-5 mb-5 transparentBackgroung">

        <form class="w-100 p-2" method="post" action="{{route('Animal.store')}}" enctype="multipart/form-data">
            
            @csrf
            
            <!-- FORM RIGHT -->
            <div class="col-sm-12 col-md-8 offset-md-2 p-2">
                
                <div class="border border-success shadow m-2 p-2" style="background: rgba(255,255,255,0.7);">
                    
                    <h1 class="text-success text-center" style="text-shadow: 1px 1px 2px black;">Entra les dades del animal</h1>
                
                    <div class="row form-group d-flex justify-content-center p-2">                    
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">NºExplotació</p>    
                            <input required id="N_Explotacio" name="N_Explotacio" type="number" min="0" class="w-100 form-control" value="{{ request('N_Explotacio') }}" placeholder="Entra el Nºexplotacio">
                        </div>
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Crotal</p>    
                            <input required name="N_DARP" type="number" min="0" class="form-control" value="{{ request('N_DARP') }}" placeholder="Entra el Nº de crotal">
                        </div>
                          
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Granja</p>    
                            
                            <select required name="ID_GRANJA" class=" form-control">
                                <option default hidden value="" >Escull una granja</option>

                                @foreach($granjes as $granja)
                                    <option value="{{$granja->ID}}">{{$granja->NomExplotacio}}</option>
                                @endforeach
                            </select>
                        </div>
                         
                        <!--
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Perímetre Torax</p>    
                            <input required name="Perimetre_Torax" type="number" min="0" class="form-control" value="" placeholder="Introdueix el perimetre"> 
                        </div>
                        -->
                         
                    </div>
                                               
                    <hr>
                    
                    <div class="row form-group d-flex justify-content-center p-2">    
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Pes Actual</p>    
                            <input required name="Pes_Actual" type="number" min="0" class="form-control" value="{{ request('Pes_Actual') }}" placeholder="Entra el pes (Kg)">
                        </div>
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Contorn</p>    
                            <input required name="Contorn_Centimetres" type="number" min="0" class="form-control" value="{{ request('Contorn_Centimetres') }}" placeholder="Entra el contorn (Cm)">
                        </div>
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Litres Calostre</p>    
                            <input required name="Litres_Calostra" type="number" min="0" class="form-control" value="{{ request('Litres_Calostra') }}" placeholder="Entra els litres">
                        </div>
                        
                        <div class="col-sm-10 col-md-4" >
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Preses Calostre</p>    
                            <input required name="Preses_Calostra" type="number" min="0" class="form-control" value="{{ request('Preses_Calostra') }}" placeholder="Entra les preses">
                        </div>
                           
                    </div>
                    
                    <hr>
                                                   
                    <div class="row form-group d-flex justify-content-center p-2">  
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Data de naixement</p>    
                            <input required name="Data_Naixement" type="date" class="form-control" value="{{ request('Data_Naixement') }}">
                        </div>
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Data Deslletament</p>    
                            <input required name="Data_Deslletament" type="date" class="form-control" value="{{ request('Data_Deslletament') }}">
                        </div>
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">D.Cremada Banyes</p>    
                            <input required name="Data_Cremada_Banyes" type="date" class="form-control" value="{{ request('Data_Cremada_Banyes') }}">
                        </div>
                        
                        <div class="col-sm-10 col-md-4">
                            <p class="text-success m-0 text-center" style="text-shadow: 1px 1px 1px black;">Metode Cremada</p>    
                            <input required name="Metode_Cremada" type="text" class="form-control" value="{{ request('Metode_Cremada') }}" placeholder="Especifica el metode">
                        </div>
                                             
                    </div>
                    
                </div>
                
            </div>
            
            <hr>
            
            <!-- FORM LEFT -->
            <div class="col-sm-12 col-md-8 offset-md-2 mt-3 mb-3">
                
                <h5 class="text-center text-success" style="text-shadow: 1px 1px 2px black;">Puja una <strong>imatge</strong> per l'animal (opcional)</h5>
                
                <input type="file" value="" name="Ruta_Imatge" id="inputArxiu" accept="image/*">
                
                                                              
                <img src="{{asset('storage/vedellesIMG/defaultVedella/defaultCalf2.jpg')}}" id="imatgeVedella" class="img img-fluid img-thumbnail w-100">
                                              
            </div>
            
             
            <input type="submit" class="d-block m-auto btn btn-success" value="Afegir Vedella">
            
            
        </form>   
    </div>
    
    
    <script type="text/javascript" src="{{ asset('js/llistatAnimals/altaAnimalImatge.js') }}"></script>
    
</div>    
@endsection