
           <!-- CAP-->  
           <div class="row">

               <div class="border-bottom border-success col-12 d-flex justify-content-start">

                   <img src="{{asset('img/logo.png')}}" alt="not found" class="bg-dark shadow m-2">
                   
               </div>


           </div>


           <!-- MENU -->
           <div class="row">

               <nav class="navbar navbar-expand-lg navbar-light bg-light w-100">

                   <form method="POST" action="{{route('buscarAnimal')}}" class="form-inline my-2 my-lg-0 bg-success rounded p-1" id="buscarAnimalForm">
                       @csrf
                       <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" name="valorCerca" id="buscarAnimalInput">
                       <button class="border border-white btn btn-outline-white my-2 text-white  my-sm-0" type="submit" id="buscarAnimalButton">Animal per NºExplotacio&nbsp;<i class="fas fa-search"></i></button>
                   </form>

                   <button class="navbar-toggler border border-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                   </button>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                       <ul class="navbar-nav mr-auto" id="mainMenuList">
                           
                           <li class="nav-item m-1 bg-success rounded p-1">
                                <a class="nav-link text-white" href="{{url('/main')}}">Menu Principal &nbsp;<i class="fas fa-home"></i></a>                             
                            </li>
                           
                           <li class="nav-item m-1 bg-success rounded p-1">
                               <a class="nav-link text-white" href="{{route('Animal.create')}}">Alta Animals &nbsp;<i class="fas fa-plus-square"></i></a>                              
                           </li>
                           
                           <li class="nav-item m-1 bg-success rounded p-1">
                               <a class="nav-link text-white" href="{{ route('Pinso.index') }}">Pinsos &nbsp;<i class="fas fa-glass-whiskey"></i></a>
                           </li>
                           
                           <li class="nav-item m-1 bg-success rounded p-1">
                               <a class="nav-link text-white" href="{{ route('Llet.index') }}">Llets &nbsp;<i class="fas fa-prescription-bottle"></i></a>
                           </li>
                           
                           <li class="nav-item m-1 bg-success rounded p-1">
                               <a class="nav-link text-white" href="{{ route('Vacuna.index') }}">Vacunes &nbsp;<i class="fas fa-syringe"></i></a>
                           </li>
                           
                           <li class="nav-item active m-1 bg-success rounded p-1">
                               <a class="nav-link text-white" href="{{route('Animal.index')}}">Llistat Animals &nbsp;<i class="fas fa-list"></i></a>
                           </li>
                                                                           
                           <li class="nav-item m-1 bg-success rounded p-1">
                               <a class="nav-link text-white" href="#">Grafiques Llet i Pinso &nbsp;<i class="fas fa-chart-line"></i></a>
                           </li>
                           
                           
                        
                       </ul>

                       <div class="d-flex  justify-content-start">
                       
                        <div class="bg-danger rounded m-1">                        
                            <a class="text-white btn bg-warning" href="#" >
                                 {{ Auth::user()->name }}
                                 &nbsp;<i class="fas fa-user"></i>
                            </a>
       
                        </div>



                        <div class="m-1 d-flex flex-column justify-content-center {{ Auth::user()->name }}">
                            <a class="text-white btn btn-warning " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }} 
                                 &nbsp;<i class="fas fa-door-open"></i>
                             </a>

                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                             </form>
                        </div>

                    </div>
                       
                   </div>
                   
                   
                       
                   
                   
               </nav>

 
               
           </div>