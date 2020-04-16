<header class="header_in clearfix">
    <div class="container">
        <div id="logo">
            <a href="{{ url('/hotel') }}">
                <img src="{{ URL::asset('/img/Logo.svg') }}" width="140" height="50" alt="">
            </a>
        </div>
        
        <ul id="top_menu">
            <!-- <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li> -->
            <!-- <li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li> -->
        </ul>
        <!-- /top_menu -->
        
        <a href="#" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a>
        
        <a href="#" class="open_close">
            <i class="icon_menu"></i><span>Menu</span>
        </a>

        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <!-- <a href="index.html"><img src="{{ URL::asset('img/logo.svg') }}" width="140" height="35" alt=""></a> -->
            </div>
            <ul>
                <li class="submenu">
                    <a href="{{ url('/hotel') }}" class="show-submenu">Home</a>
                </li>
                <li class="submenu">
                    <a href="{{ url('/hotel/aboutus') }}" class="show-submenu">About</a>
                </li>
                <li class="submenu">
                    <a href="{{ url('/hotel/contactus') }}" class="show-submenu">Contact Us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>