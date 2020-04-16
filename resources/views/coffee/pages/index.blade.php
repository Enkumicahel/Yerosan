@extends('coffee.layouts.main')

    @section('title', 'Home')

    <!-- SPECIFIC CSS -->
    @push('styles')
        <link href="{{ URL::asset('/css/home.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('/css/custom.css') }}" rel="stylesheet">
    @endpush

</head>

<body>
                
    <!-- /header -->
    @section('content')

    <main>
        <div class="hero_single inner_pages background-image" data-background="url(/img/about_11.jpg)">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Yerosan Coffee Processing</h1>
                            <p>Coffee Processing</p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /hero_single -->

        <div class="bg_gray">
            <div class="container margin_60_40">            
            <div class="main_title center">
                <span><em></em></span>
                <h2>Our Coffee Processing</h2>
                <p>Ethiopian &amp; Coffee</p>
            </div>

            <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-5">
                        <div class="box_about">

                            {{-- <img src="img/arrow_about.png" alt="" class="arrow_1"> --}}
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                            <img src="img/about_11.jpg" alt="" class="img-fluid" width="500" height="250">
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                            <img src="img/about_12.jpg" alt="" class="img-fluid" width="500" height="250">
                    </div>
                    <div class="col-lg-5">
                        <div class="box_about">

                            {{-- <img src="img/arrow_about.png" alt="" class="arrow_2"> --}}
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="box_about">

                        </div>

                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                            <img src="img/about_13.jpg" alt="" class="img-fluid" width="500" height="250">
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->
        
    </main>
    <!-- /main -->
    @endsection

</body>
