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
            
            
            <div id="mySidebar" class="sidebar transparentBackgroungTransp">
                
              <div class="d-flex justify-content-around" style="visibility: hidden;">
                    <p class="m-3 text-success"><strong>Nova Llet</strong></p>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>    
              </div>
              
              
              <div class="p-3 w-100" style="visibility: hidden;">
                  
                  <!-- FROM NOU PINSO -->
                  <form id="nouPinsoForm" method="POST" action="{{route('Llet.store')}}">
                      
                      @csrf
                      
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nom Llet</label>
                        <input type="text" class="form-control" name="Nom" aria-describedby="emailHelp" placeholder="nom...">
                        <small id="emailHelp" class="form-text text-muted">Nom, marca etc...</small>
                      </div>
                      
                      <div class="form-group">
                        <label for="selectTipus">Tipus</label>
                        <select id="selectTipus" class="browser-default custom-select" name="Tipus">
                              <option value="Liquida">Liquida</option>
                              <option value="En pols">En pols</option>
                        </select>
                        <small id="emailHelp" class="form-text text-muted">liquid, pols etc...</small>
                      </div>
                                          
                      
                      <div class="form-group">
                        <label for="exampleInputPassword1">Quantitat</label>
                        <input type="number" min="0" class="form-control" name="Quantitat" placeholder="Quantitat">
                        <small class="form-text text-muted">Quantitat actual de llet</small>
                      </div>
                      
                                            
                      <div class="form-group">
                        <label for="exampleInputPassword1">Preu Unitari</label>
                        <input type="number" min="0" class="form-control" name="Preu_Unitat" placeholder="30€...">
                        <small class="form-text text-muted">Preu per KG</small>
                      </div>
                                                            
                                            
                      <button type="submit" class="btn btn-block btn-success">Afegir</button>   
                  </form>
                  <!-- END FROM NOU PINSO -->
                  
                  
              </div>
              
            </div>

            <div id="main" class="d-flex justify-content-around">
              <button class="openbtn bg-success border border-white" onclick="openNav()">☰ Afegir llet</button>  
            </div>
            
            
        </div>
      
        <!-- LLET LLISTAT -->
        <div class="col-10 transparentBackgroungTransp" id="pinsuLlista">
            
            <div class="grid fadeIn">
                
                
              
                    @foreach($llets as $key => $llet)
                    <div class="grid-item card  m-2 m-md-5 shadow" style="width: 16rem;">

                        <div class="m-1 d-flex justify-content-end borrarPinsoButton">
                            <i class="far fa-times-circle text-danger" id="{{$llet->Nom}}"></i>

                            <form id="pinsoDeleteForm_{{$key}}" method="POST" action="{{route('Llet.destroy', $llet->ID)}}" style="display: none; pointer-events: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>

                        </div>

                        <div class="card-body">
                          <h5 class="card-title">{{$llet->Nom}}</h5>
                          <h5 class="card-title"> <strong>{{$llet->Quantitat}}{{$llet->Unitat}}</strong> Llet {{$llet->Tipus}}</h5>
                             
                          <button class="bg-success border-0 p-2">
                              <a href="#" class="card-link text-white">Preu Unitari: {{$llet->Preu_Unitat}}€</a>
                          </button>

                        </div>
                    </div>
                    @endforeach
                
                              
            </div>
            
                    
        </div>
        
        
                  
    </div>
    
   
    <!-- ALTA LLET -->
    <script type="text/javascript" src="{{asset('js/altaLlet/altaLlet.js')}}"></script>
    <!-- SIDEMENU SCRIPT -->
        <script src="{{asset('js/sideMenu.js')}}"></script>
</div>
@endsection

