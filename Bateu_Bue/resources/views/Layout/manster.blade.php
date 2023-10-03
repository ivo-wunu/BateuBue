<!DOCTYPE html>
<html lang="pt-br">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Edmilson Cardoso && Ivo Wunu">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>BATEU-BWÉ PORTAL DE INFORMAÇÃO</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="{{asset('assetes/text/css" href="assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="{{asset('assetes/text/css" href="assets/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('assetes/css/templatemo-hexashop.css')}}">

    <link rel="stylesheet" href="{{asset('assetes/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('assetes/css/lightbox.css')}}">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    @include('Layout/topo')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Africa Area Starts ***** -->
    <!-- ***** Africa Area Ends ***** -->
    @yield('sessao')
    <!-- ***** Nóticias Area Starts ***** -->
    <!-- ***** Noticias Area Ends ***** -->

    <!-- ***** Cultura Area Starts ***** -->
    <!-- ***** Cultura Area Ends ***** -->

    <!-- ***** Política Area Starts ***** -->
    <!-- ***** Explore Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    @include('Layout/footer')    

    <!-- jQuery -->
    <script src="{{asset('assetes/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('assetes/js/popper.js')}}"></script>
    <script src="{{asset('assetes/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('assetes/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assetes/js/accordions.js')}}"></script>
    <script src="{{asset('assetes/js/datepicker.js')}}"></script>
    <script src="{{asset('assetes/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('assetes/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assetes/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assetes/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('assetes/js/slick.js')}}"></script> 
    <script src="{{asset('assetes/js/lightbox.js')}}"></script> 
    <script src="{{asset('assetes/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="assetes/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>