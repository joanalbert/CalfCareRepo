

<body>
    
    <title>Calf Care - Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../../img/favicon.png"/>
  
       <div class="container-fluid">
          
          
          <!-- TOP -->
           <div class="row border-bottom shadow" id="top">
              <div id="idiomes" class="m-1  col-sm-12 col-md-6 col-lg-6">
                  
                  <div class=" w-100 h-100 d-flex justify-content-start">
                      <p class=" mt-auto mb-auto p-1 text-white">
                          <button class="btn btn-success">English</button>
                      </p>
                      <p class=" mt-auto mb-auto p-1 text-white">
                          <button class="btn btn-success">Español</button>
                      </p>
                      <p class=" mt-auto mb-auto p-1 text-white">
                          <button class="btn btn-success">Català</button>
                      </p>
                      <p class=" mt-auto mb-auto p-1 text-white">
                          <button class="btn btn-success">Français</button>
                      </p>
                  </div>
                    
              </div>   
           </div>
           
           
           <!-- MID -->
           <div class="row mt-5" id="middle">
               
               <div id="logo" class="mt-3 col-sm-12 col-md-6 offset-md-3 shadow">
                   
                   <img class="img-fluid w-50 rounded mx-auto d-block" src="{{asset('img/logo.png')}}" alt="">
                   
               </div>
               
           </div>
           
           
          
           <!-- BOTTOM -->
           <div class="row mt-5" id="bottom">
               
               <div id="loginCont" class="col-sm-10 offset-sm-1 col-md-4 offset-md-4">
                   
                   <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            

                            
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror d-block m-1 w-100 p-2 rounded border-success" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
     

                     
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror d-block m-1 w-100 p-2 rounded border-success" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                        </div>

                        <!--
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        -->
                        
                        
                        <div class="form-group row mb-0">
                            
                                <button type="submit" class="btn btn-success text-white btn-block m-1">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-white text-center btn-success btn-block m-1" href="{{ route('password.request') }}">
                                        {{ __('Recuperar Contrassenya') }}
                                    </a>
                                @endif
                           
                        </div>
                    </form>
                   
               </div>
               
           </div>
           
           
       </div>
   
    
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
   