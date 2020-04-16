<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yerosan Bussiness Group">
    <meta name="author" content="Yerosan Bussiness Group">
    <title>Yerosan Hotel - @yield('title')</title>

    <!-- Favicons-->
    <link rel="icon" href="{{ URL::asset('/img/yeros.jpg') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ URL::asset('/img/yeros.jpg') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ URL::asset('/img/yeros.jpg') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ URL::asset('/img/yeros.jpg') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ URL::asset('/img/yeros.jpg') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ URL::asset('/css/bootstrap_customized.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/fontawesome/all.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    @stack('styles')


</head>

<body>
                
    @include('hotel.partials.header')
    <!-- /header -->
    

    @yield('content')
    <!-- /main -->


    @include('hotel.partials.footer')
    <!--/footer-->

    <div id="toTop"></div><!-- Back to top button -->
    
    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
    
    <!-- Sign In Modal -->
    @include('hotel.partials.modalsignin')
    <!-- /Sign In Modal -->
    
    <!-- COMMON SCRIPTS -->
    <script src="{{ URL::asset('/js/common_scripts.min.js') }}"></script>
    <script src="{{ URL::asset('/js/common_func.js') }}"></script>
    <script src="{{ URL::asset('/js/validate.js') }}"></script>
    @stack('scripts')

</body>
</html>