<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Yerosan Bussiness Group">
    <meta name="author" content="Yerosan Bussiness Group">
    <title>Yerosan Bussiness Group</title>

    <!-- Favicons-->
    {{-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> --}}
    <link rel="shortcut icon" href="{{ URL::asset('/img/yerosansmall.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ URL::asset('/img/yerosansmall.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ URL::asset('/img/yerosansmall.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ URL::asset('/img/yerosansmall.png') }}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ URL::asset('/img/yerosansmall.png') }}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ URL::asset('/css/bootstrap_customized.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet">

    <!-- ICON CSS -->
    <link href="{{ URL::asset('/css/fontawesome/all.css') }}" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="{{ URL::asset('/css/help.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('/css/custom.css') }}" rel="stylesheet">

</head>

<body>
                
    {{-- @include('hotel.partials.header') --}}
    <!-- /header -->
    
    <main>

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>Welcome To Yerosan Business Group</h2>
                    <p>Pick your destination site.</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a class="box_topic" href="{{ url('/hotel') }}">
                            <span><i class="fas fa-utensils"></i></span>
                            <h3>Hotel</h3>
                            <p>The best of our hotel services.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_topic" href="{{ url('/dairyfarm') }}">
                            <i class="fas fa-tractor"></i>
                            <h3>Dairy Farm</h3>
                            <p>Our dairy products producing farm.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_topic" href="{{ url('/coffee') }}">
                            <i class="fas fa-seedling"></i>
                            {{-- <i class="icon_lifesaver"></i> --}}
                            <h3>Coffee Processing</h3>
                            <p>Our Coffee Processing</p>
                        </a>
                    </div>

                </div>
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->

    </main>
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

</body>
</html>