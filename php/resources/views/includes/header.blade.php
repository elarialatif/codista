
<!--topline section visible only on small screens|-->
<div class="header_absolute s-pb-30">
    <header class="page_header ds">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-11">
                    <a href="/" class="logo text-center">
                        {{-- <div><img src="assets/images/logo1.jpg" alt=""></div>
                        <div><img src="assets/images/logotxt.png" alt=""></div> --}}
                        <img src="assets/images/logofinal.jpeg" alt="">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">


                            <li class="">
                                <a href="/">{{trans('front.home')}}</a>
                            </li>
                            <li>
                                <a href="/about">About</a>
                            </li>
                            <li>
                                <a href="/services">Services</a>
                            </li>
                            <!-- blog -->

                            <!-- gallery -->
                            <!-- <li>
                                <a href="gallery-regular.html">Works</a>
                            </li> -->
                            <!-- eof Gallery -->

                            <!-- eof pages -->

                            <!-- eof blog -->

                            <li>
                                <a href="/contact">Contact Us</a>

                            </li>
                            <!-- eof contacts -->

                            <!-- eof features -->

                            <!-- contacts -->

                        </ul>


                    </nav>
                    <!-- eof main nav -->
                </div>
                <div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
                    <div class="header_lang">
                        @if(session('lang')=='ar')
                        <a class="lang" href="lang/en">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span> EN</span>
                        </a>
                        @else
                        <a class="lang" href="lang/ar">
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span> AR</span>
                        </a>
                        @endif                        
                        
                        
                    </div>
                </div>
                <div class="search-box">
                    <a href="/" class="search-btn">
                        <img src="assets/images/logo1.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu">
            <span></span>
        </span>
    </header>
</div>
<span class="toggle_menu_side header-slide">
    <span></span>
</span>
