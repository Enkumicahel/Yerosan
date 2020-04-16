@extends('hotel.layouts.main')

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
        <!-- <main class="bg_gray pattern"> -->
        <main>
            
            @include('hotel.partials.header_simple')

            <div class="bg_gray">
                <div class="container margin_60_40">
                    <div class="main_title center">
                        <span><em></em></span>
                        <h2>Popular Categories</h2>
                        <p>Service Of The Highest Order Offered To You Morethan You Can Imagine</p>
                    </div>
                    <!-- /main_title -->
                    <div class="owl-carousel owl-theme categories_carousel">
                        <div class="item">
                            <a href="#">
                                {{-- <span>98</span> --}}
                                <i class="fas fa-glass-martini-alt"></i>
                                <h3>Bar</h3>
                                <small>Our Bar</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                {{-- <span>87</span> --}}
                                <i class="fas fa-utensils"></i>
                                <h3>Restaurant</h3>
                                <small>Our Restaurant</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                {{-- <span>96</span> --}}
                                <i class="fas fa-mug-hot"></i>
                                <h3>Cafe</h3>
                                <small>Our Cafe</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                {{-- <span>78</span> --}}
                                <i class="fas fa-coffee"></i>
                                <h3>Coffee Ceremony</h3>
                                <small>Our Ethiopian Coffee</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                {{-- <span>65</span> --}}
                                <i class="fas fa-bed"></i>
                                <h3>Rooms</h3>
                                <small>Our Rooms</small>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#">
                                {{-- <span>65</span> --}}
                                <i class="fas fa-plus"></i>
                                <h3>Others</h3>
                                <small>Coming Soon</small>
                            </a>
                        </div>
                    </div>
                    <!-- /carousel -->
                </div>
                <!-- /container -->
            </div>
            <!-- /bg_gray -->

            <div class="call_section lazy" data-bg="url('/pics/Coffee-cup.jpg')">
                <div class="container clearfix">
                    <div class="col-lg-5 col-md-6 float-right wow">
                        <div class="box_1">
                        <h3>Do you know about Ethiopian Coffee Ceremony?</h3>
                        <p>Join Us to experience one of the best of the Ethiopian experience.</p>
                            {{-- <a href="submit-restaurant.html" class="btn_1">Read more</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!--/call_section-->


        </main>
    @endsection
    <!-- /main -->

    @push('scripts')
        <!-- SPECIFIC SCRIPTS -->
        <script src="{{ URL::asset('/js/modernizr.min.js') }}"></script>
        <script src="{{ URL::asset('/js/video_header.min.js') }}"></script>
        <script>
            // Video Header
            HeaderVideo.init({
                container: $('.header-video'),
                header: $('.header-video--media'),
                videoTrigger: $("#video-trigger"),
                autoPlayVideo: true
            });
        </script>
    @endpush

</body>
</html>