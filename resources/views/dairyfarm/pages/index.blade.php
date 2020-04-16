@extends('dairyfarm.layouts.main')

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
        <div class="hero_single inner_pages background-image" data-background="url(/pics/Dairy-farm.png)">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Yerosan Dairy Farm</h1>
                            <p>Our Dairy Products</p>
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
                <h2>Our Dairy Farm</h2>
                <p>Healthy &amp; Natural</p>
            </div>

            <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h3>Aannan Sibuu Milk (500ml)</h3>
                            <p class="lead">A lot can be said but just natural.</p>
                            <p></p>
                            {{-- <img src="img/arrow_about.png" alt="" class="arrow_1"> --}}
                        </div>
                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                            <img src="img/about_1.png" alt="" class="img-fluid" width="500" height="250">
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center add_bottom_15">
                    <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                            {{-- <img src="img/about_2.png" alt="" class="img-fluid" width="500" height="250"> --}}
                    </div>
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h3>Average Composition</h3>
                            <p class="lead">Pasteurized Milk</p>
                            <p>Fat 2.8&#37;</p>
                            <p>Protein 3.5&#37;</p>
                            <p>Lactose 4.2&#37;</p>
                            <p>Minerals 0.8&#37;</p>
                            <p>Ash 0.8&#37;</p>
                            <p>Vitamins B1, B2, C &#37; D</p>
                            {{-- <img src="img/arrow_about.png" alt="" class="arrow_2"> --}}
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-5">
                        <div class="box_about">
                            <h3>Sibuu Yoghurt (500ml)</h3>
                            <p class="lead">Nutritional Value(100ml)</p>
                            <p>Calorie/Energy 43 Kcal/183kJ</p>
                            <p>Protein 3.96&#37;</p>
                            <p>Carbohydrate 6.8&#37;</p>
                            <p>Fat 0.2&#37;</p>
                            <p>Fibers 0.0&#37;</p>
                        </div>

                    </div>
                    <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                            <img src="img/about_3.png" alt="" class="img-fluid" width="500" height="250">
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
