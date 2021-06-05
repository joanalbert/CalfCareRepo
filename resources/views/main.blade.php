@extends('partials.template')



@section('content')
<!-- COS -->           
           <div class="row fadeIn">
                
               <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/menuPrincipal/evo-calendar.css') }}"/>
            
               <div class="col-sm-12 col-md-6 offset-md-3 m-2 border-danger" id="tasksHolder" style="display: none;">              
                   <div class="grid fadeIn transparentBackgroung bg-light d-flex" id="taskList">
                       
                       @foreach($tasques as $key => $t)
                       <div class="grid-item taskDivs" id="task_{{$key}}" style="width: 30rem;">    
                            <p id="{{$key}}_Observacions">{{$t->Observacions}}</p>
                            <p id="{{$key}}_Acabada">{{$t->acabada}}</p>
                            <p id="{{$key}}_DataInici">{{$t->DataInici}}</p>
                            <p id="{{$key}}_DataFi">{{$t->DataFi}}</p>                         
                       </div> 
                       @endforeach
                        
                   </div>                        
               </div>
               
               
               
               <div id="calendar"></div>
               
               
               <!-- tasks to calendar script -->
               <script src="{{asset('js/menuPrincipal/loadTasks.js')}}"></script>
                                                                    
               <!-- Add jQuery library (required) -->
                <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>

                <!-- Add the evo-calendar.js for.. obviously, functionality! -->
                <script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
                                      
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                <script src="{{ URL::asset('js/menuPrincipal/evo-calendar.js')}}"></script>
                
                <script>                    
                    $("#calendar").evoCalendar({
                        language: 'es',
                        todayHighlight: true
                    });
                    
                  
                </script>
           </div>
@endsection