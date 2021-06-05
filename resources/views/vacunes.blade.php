@extends('partials.template')



@section('content')
<div clss="container">
    
    <link rel="stylesheet" href="{{ asset('css/altaPinsoMain.css') }}">
    <link rel="stylesheet" href="{{ asset('css/transparency.css') }}">
    
    
    <!-- POPUP MODAL (eliminar pinso) -->
    <div class="row">
        
            
            <button id="myBtn" style="display: none;">Open Modal</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <br>
                <h5 id="modalText" class="mb-5 text-center">Desitgeu eliminar aquesta Llet?</h5>
                
                <div class="d-flex justify-content-around">
                    <button id="si" class="w-25 btn btn-success text-white">Sí</button>
                    <button id="no" class="w-25 btn btn-danger text-white">No</button>
                </div>
              </div>

            </div>
            
            
               
    </div>
    
    
    
    
    <div class="row">
  
        
        <!-- SIDE MENU -->
        <div class="col-2 p-3" id="menuLateral">
                        
            <div id="mySidebar" style="overflow-y: hidden;" class="sidebar transparentBackgroungTransp">
                
              <div class="d-flex justify-content-around" style="visibility: hidden;">
                    <p class="m-1 text-success"><strong>Nova Vacuna</strong></p>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>    
              </div>
              
              
              <div class="p-3 w-100" style="visibility: hidden;">
                  
                  <!-- FROM NOU PINSO -->
                  <form id="nouPinsoForm" method="POST" action="{{route('Vacuna.store')}}">
                      
                      @csrf
                      
                      <!-- nom vacuna -->
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nom vacuna</label>
                        <input type="text" class="form-control" name="Nom" aria-describedby="emailHelp" placeholder="nom...">
                        <small id="emailHelp" class="form-text text-muted">El nom d'aquesta vacuna</small>
                      </div>
                      
                      <!-- edat primera dosi -->                                                               
                      <div class="form-group">                                  
                        <label for="exampleInputEmail1">Edat primera dosi</label>                            
                        <div class="d-flex justify-content-around">                                                     
                            <input class="form-control" type="number" min="0" name="DiesPrimeraDosi">                                                                                 
                            <select name="select_primera_dosi" class="form-control">                        
                                <option value="m">Mesos</option>
                                <option value="d">Dies</option>
                            </select>                           
                        </div>                       
                        <small class="form-text text-muted">Edat de la vedella per la primera dosi</small>
                       </div>
                      
                        
                       <!-- edat primera dosi -->                                                               
                      <div class="form-group">                                  
                        <label for="exampleInputEmail1">Repetició dosi</label>                            
                        <div class="d-flex justify-content-around">                                                     
                            <input class="form-control" type="number" min="0" name="DiesPeriode">                                                                                 
                            <select name="select_periode_dosi" class="form-control">                        
                                <option value="m">Mesos</option>
                                <option value="d">Dies</option>
                            </select>                           
                        </div>                       
                        <small class="form-text text-muted">Temps entre dosis</small>
                       </div>
                      
                      
                      <button type="submit" class="btn btn-block btn-success">Afegir</button>   
                  </form>
                  <!-- END FROM NOU PINSO -->
                  
                  
              </div>
              
            </div>

            <div id="main" class="d-flex justify-content-around">
              <button class="openbtn bg-success border border-white" onclick="openNav()">☰ Nova Vacuna</button>  
            </div>
            
            
        </div>
      
        <!-- VACUNES LLISTAT -->
        <div class="col-10 transparentBackgroungTransp" id="pinsuLlista">
            
            <div class="grid fadeIn">
                
                
              
                    @foreach($vacunes as $key => $vacuna)
                    <div class="grid-item card  m-2 m-md-5 shadow" style="width: 30rem;">

                        <div class="m-1 d-flex justify-content-end borrarPinsoButton">
                            <i class="far fa-times-circle text-danger" id="{{$vacuna->Nom}}"></i>

                            <form id="pinsoDeleteForm_{{$key}}" method="POST" action="{{route('Vacuna.destroy', $vacuna->ID)}}" style="display: none; pointer-events: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>

                        </div>

                        <div class="card-body">
                          
                            <h2>{{$vacuna->Nom}} <i class="fas fa-syringe text-danger"></i> </h2>
                            
                            <table class="table text-center">
                                <thead class="thead bg-success">
                                  <tr>
                                    <th scope="col">Edat primera dosi</th>
                                    <th scope="col">Repeticio dosi</th>                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td><strong class="primeraDosi">{{$vacuna->DiesPrimeraDosi}}</strong></td>
                                    <th scope="row"><strong class="periode">{{$vacuna->DiesPeriode}}</strong></th>                                  
                                  </tr>
                                  
                                </tbody>
                              </table>

                              
                        </div>
                    </div>
                    @endforeach
                
                              
            </div>
            
                    
        </div>
        
        
                  
    </div>
            
    <!-- SCRIPTS PAGINA VACUNES -->
    <script type="text/javascript" src="{{asset('js/altaVacunes/altaVacunes.js')}}"></script>
    
    <!-- DIES A MESOS SCRIPT -->
    <script type="text/javascript" src="{{asset('js/altaVacunes/mostrarEnDies.js')}}"></script>
    
    <!-- FORM SCRIPT -->
    <script type="text/javascript" src="{{asset('js/altaVacunes/VacunesFormScript.js')}}" ></script>
    
    <!-- SIDEMENU SCRIPT -->
    <script src="{{asset('js/sideMenu.js')}}"></script>
    
</div>
@endsection

















