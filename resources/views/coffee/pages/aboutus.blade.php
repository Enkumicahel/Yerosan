@extends('hotel.layouts.main')
    
    @section('title', 'About Us')

    <!-- SPECIFIC CSS -->
    @push('styles')
        <link href="{{ URL::asset('/css/home.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('/css/custom.css') }}" rel="stylesheet">
    @endpush

</head>

<body>
                
    <!-- /header -->
    @section('content')

        <div class="hero_single inner_pages background-image" data-background="url('/pics/cover_2.jpg')">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>About Yerosan Hotel</h1>
                            <p>A successful restaurant experience</p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /hero_single -->              

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