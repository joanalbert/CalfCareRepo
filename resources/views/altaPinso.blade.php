@extends('partials.template')



@section('content')
<div clss="container">
    
    <link rel="stylesheet" href="{{ asset('css/altaPinsoMain.css') }}">
    
    <!-- POPUP MODAL (eliminar pinso) -->
    <div class="row">
        
            
            <button id="myBtn" style="display: none;">Open Modal</button>

            <!-- The Modal -->
            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <br>
                <h5 id="modalText" class="mb-5 text-center">Desitgeu eliminar aquest Pinso?</h5>
                
                <div class="d-flex justify-content-around">
                    <button id="si" class="w-25 btn btn-success text-white">Sí</button>
                    <button id="no" class="w-25 btn btn-danger text-white">No</button>
                </div>
              </div>

            </div>
            
            
               
    </div>
    
    <div class="row">
      
        <!-- PINSU LLISTAT -->
        <div class="col-12 transparentBackground">
            
            <div class="grid fadeIn">
                
                
              
                    @foreach($pinsos as $key => $pinso)
                    <div class="grid-item card  m-2 m-md-5 shadow" style="width: 16rem;">

                        <div class="m-1 d-flex justify-content-end borrarPinsoButton">
                            <i class="far fa-times-circle text-danger" id="{{$pinso->Nom}}"></i>

                            <form id="pinsoDeleteForm_{{$key}}" method="POST" action="{{route('Pinso.destroy', $pinso->ID)}}" style="display: none; pointer-events: none;">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            </form>

                        </div>

                        <div class="card-body">
                          <h5 class="card-title">{{$pinso->Nom}}</h5>
                          <h6 class="card-subtitle mb-2 text-muted">{{$pinso->Caracteristiques}}</h6>
                          <p class="card-text">{{$pinso->Observacions}}</p>

                          <button class="bg-success border-0 p-2">
                              <a href="#" class="card-link text-white">Preu Unitari: {{$pinso->Preu_Unitat}}€</a>
                          </button>

                        </div>
                    </div>
                    @endforeach
                
                              
            </div>
            
                    
        </div>
        
        
                  
    </div>
    
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <!-- or -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
        
    <script type="text/javascript" src="{{asset('js/altaPinso/altaPinso.js')}}"></script>
</div>
@endsection

