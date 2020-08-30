@extends('partials.template')



@section('content')
<!-- COS -->
           <div class="row fadeIn">
                  
                  <div class="col-sm-12 col-md-6 border border-success p-4">
                      
                      <div id="grafica1">
                          
                          <img src="{{asset('img/logo.png')}}" alt="" class="w-75">
                          
                      </div>
                      
                      
                      <div id="infoGraf1" class="bg-white text-center">
                          
                          <h2>Info.Economia Llet</h2>
                          
                          
                          <br>
                          
                          <ul class="list-group list-group-flush">
                             <li class="list-group-item">
                                 <p>Preu Unitari Llet</p>
                             </li>
                             <li class="list-group-item">
                                 <p>Unitats Adquirides</p>
                             </li> 
                          </ul>
                          
                      </div>
                  </div>
                  
                  
                  <div class="col-sm-12 col-md-6 border border-success p-4">
                      
                      <div id="grafica2">
                          
                          <img src="{{asset('img/logo.png')}}" alt="" class="w-75">
                          
                      </div>
                      
                      <div id="infoGraf2" class="bg-white text-center">
                         
                          <h2>Info.Economia Pinso</h2>
                          
                          
                          <br>
                          
                          <ul class="list-group list-group-flush">
                             <li class="list-group-item">
                                 <p>Preu Unitari Pinso</p>
                             </li>
                             <li class="list-group-item">
                                 <p>Unitats Adquirides</p>
                             </li> 
                          </ul>
                          
                      </div>
                      
   
                      
                  </div>
                  

           </div>
@endsection