@extends('hotel.layouts.main')

    @section('title', 'Contact Us')

    <!-- SPECIFIC CSS -->
    @push('styles')
        <link href="{{ URL::asset('/css/home.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('/css/custom.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('/css/contacts.css') }}" rel="stylesheet">
    @endpush

</head>

<body>
                
    <!-- /header -->
    @section('content')

    <main>
        <div class="hero_single inner_pages background-image" data-background="url('/pics/cover_2.jpg')">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Contact Yerosan Hotel</h1>
                            <p>A successful restaurant experience</p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
        <!-- /hero_single -->

        <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="box_contacts">
                            <i class="icon_lifesaver"></i>
                            <h2>Contact Center</h2>
                            <a href="#">+251911197745</a> | <a href="#">+251942360842</a>
                            <small>myerosan&commat;gmail.com <br> info&commat;yerosanbusinessgroup.com</small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="box_contacts">
                            <i class="icon_pin_alt"></i>
                            <h2>Address</h2>
                            <div>Nedjo, Gori Wereda <br>West Wolega, Oromia <br> Ethiopia</div>
                        </div>
                    </div>
{{--                     <div class="col-lg-4">
                        <div class="box_contacts">
                            <i class="icon_cloud-upload_alt"></i>
                            <h2>Submissions</h2>
                            <a href="#0">+94 423-23-221</a> - <a href="#0">order@foogra.com</a>
                            <small>MON to FRI 9am-6pm SAT 9am-2pm</small>
                        </div>
                    </div> --}}
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bg_gray -->

        <div class="container margin_60_40">
            <h5 class="mb_5">Drop Us a Line</h5>
            <div class="row">
                <div class="col-lg-4 col-md-6 add_bottom_25">
                    <div id="message-contact"></div>
                    <form method="post" action="/contactus" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Name" id="name_contact" name="name">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Email" id="email_contact" name="email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" style="height: 150px;" placeholder="Message" id="message_contact" name="message"></textarea>
                        </div>

                        <div class="form-group">
                            <input class="btn_1 full-width" type="submit" value="Submit">
                        </div>
                </div>
                </form>
                <div class="col-lg-8 col-md-6 add_bottom_25">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15740.039955136273!2d35.4998624!3d9.50786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ed8185103ac5f36!2sYerosan%20Hotel!5e0!3m2!1sen!2set!4v1584527115596!5m2!1sen!2set" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}

                    <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15740.039955136273!2d35.4998624!3d9.50786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ed8185103ac5f36!2sYerosan%20Hotel!5e0!3m2!1sen!2set!4v1584527115596!5m2!1sen!2set" allowfullscreen></iframe>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->

    </main>
    <!-- /main -->               

    @endsection
    <!-- /main -->

    @push('scripts')
        <!-- SPECIFIC SCRIPTS -->
        <script src="{{ URL::asset('/js/common_scripts.min.js') }}"></script>
        <script src="{{ URL::asset('/js/common_func.js') }}"></script>
        <script src="{{ URL::asset('/js/validate.js') }}"></script>

    @endpush

</body>
</html>