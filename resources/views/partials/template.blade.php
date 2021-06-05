
<html lang="es">

    <head>
        <meta content='maximum-scale=1.0, initial-scale=1.0, width=device-width' name='viewport'>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/templateHeader.css')}}">
        <link rel="stylesheet" href="{{asset('css/fadeIn.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">   
        
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/4212cb22d0.js" crossorigin="anonymous"></script>
    </head>


    <body>

        
        <div class="container-fluid parallaxBackgroundLarge">
            
            
            
            @include('partials.header')

            @yield('content')
                   
            @include('partials.footer')
                        
        </div>

       
    </body>


    <footer>         
        
        <!-- MASONRY INIT -->
        <script src="{{asset('js/initMasonry.js')}}"></script>
        
        
        
        <!-- BOOTSTRAP -->
        <script src="https://use.fontawesome.com/2c2f589e80.js"></script>
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        
       
        <!-- IMPORT MASONRY -->
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>       
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
        
    </footer>

</html>




