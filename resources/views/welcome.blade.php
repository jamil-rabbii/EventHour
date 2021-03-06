<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

         Fonts 
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>EventHour</title>
        <!-- Font Google -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
        <!-- Bootstrap Css -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome Css -->
        <!-- Font Awesome Css -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- <link href="assets/css/fontawesome.min.css" rel="stylesheet"> -->
        <!-- Magnific Popup Css -->
        <link href="{{ asset('/assets/css/magnific-popup.css') }}" rel="stylesheet">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('/assets/img/favicon.png') }}" />
        <!-- Owl Carousel Css -->
        <link href="{{ asset('/assets/css/owl.carousel.css') }}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
        <!-- Responsive Css -->
        <link href="{{ asset('/assets/css/responsive.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <body>
        <div class="main-div">
            <div id="app">
                <masterr></masterr>
            </div>
        </div>
        <script>
        (function () {
               window.Laravel = {
                   csrfToken: '{{ csrf_token() }}'
               };
               @if(Auth::check())
                 window.authUser={!! Auth::user() !!}
                 @else
                   window.authUser=false
                 @endif
           })();
       </script>
        <script src="/js/app.js"></script>
        <!-- Main JS -->
        <script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
        <!-- Popper JS -->
        <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
        <!-- Bootstrap JS -->
        <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
        <!-- Owl Carousel JS -->
        <script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
        <!-- Manific Popup JS -->
        <script src="{{ asset('/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <!-- One Page Nav JS -->
        <script src="{{ asset('/assets/js/onepagenav.js') }}"></script>
        <!-- Isotope JS -->
        <script src="{{ asset('/assets/js/isotope.js') }}"></script>
        <!-- Imageload JS -->
        <script src="{{ asset('/assets/js/imageloaded.min.js') }}"></script>
        <!-- Counter JS -->
        <script src="{{ asset('/assets/js/jquery.counterup.min.js') }}"></script>
        <!-- Waypoint JS -->
        <script src="{{ asset('/assets/js/waypoint.min.js') }}"></script>
        <!-- Main JS -->
        <script src="{{ asset('/assets/js/main.js') }}"></script>
    </body>
    </body>
</html>
