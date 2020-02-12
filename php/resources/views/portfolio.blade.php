@extends('layouts.master')
@section('content')
<!-- banner starts -->
<div class="banner d-flex align-items-center light-grey-bg">

    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </div>
    </nav>


    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 data-aos="zoom-in" data-aos-duration="2000">Portfolio</h1>
                <p data-aos="zoom-in" data-aos-duration="2500" class="larger-txt">
                    By having professional distinguished team programmers, developers, marketers and designers which
                    have a great solid experience coming from the huge number programs, software, websites, applications
                    and campaigns to our esteemed clients working.
                </p>

            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6" data-aos="zoom-out" data-aos-duration="3000">
                <div class="img-container text-center text-lg-right">
                    <img src="assets/images/portfolio-banner.png" alt="Portfolio banner image" class="img-fluid">
                </div>
                <!-- End of .img-container -->
            </div>
            <!-- End of .col-lg-7 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .banner -->
<!-- Projects starts -->
<section class="projects section-gap light-grey-bg" id="cynic-projects" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center" data-aos="zoom-in" data-aos-duration="2000">Full Portfolio</h2>

        <div class="item-showcase grid-wrapper__small-padding">
            <div class="btn-filter-wrap nav nav-tabs justify-content-center">
                <button class="btn-filter nav-link is-checked" data-filter="*">
                    <i class="ml-tro-3-trophy-cup-medallion-locket-win"></i>
                    All Work
                </button>
                <button class="btn-filter nav-link" data-filter=".category-a">
                    <i class="ml-symtwo-34-cursor-click-browser-website-arrow-computer"></i>
                    Website
                </button>
                <button class="btn-filter nav-link" data-filter=".category-b">
                    <i class="ml-des-57-upload-download-sync-application-device-mobile-computer"></i>
                    Mobile App
                </button>
            </div>
            <!-- End of .btn-filter-wrap -->
            <div class="row iso-grid" style="position: relative; height: 1031.94px;">

                <div class="col-lg-4 col-md-6 item category-a category-b"
                    style="position: absolute; left: 0%; top: 0px;" data-aos="fade-right" data-aos-duration="2000">
                    <a href="{{ route('portfolio') }}" class="img-card text-center portfolio-card white-bg " data-toggle="modal"
                        data-target="#project-modal-neur">
                        <img src="assets/images/pr1.png" alt="product" class="img-fluid">
                        <h4>
                            <span>Neurology</span>
                            Website & Mobile App
                        </h4>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->

                <div class="col-lg-4 col-md-6 item category-a category-b"
                    style="position: absolute; left: 33.3333%; top: 0px;" data-aos="fade-right"
                    data-aos-duration="2500">
                    <a href="{{ route('portfolio') }}" class="img-card text-center portfolio-card white-bg " data-toggle="modal"
                        data-target="#project-modal-fixsira">
                        <img src="assets/images/pr2.png" alt="product" class="img-fluid">
                        <h4>
                            <span>Fixsira</span>
                            Website & Mobile App
                        </h4>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->

                <div class="col-lg-4 col-md-6 item category-a" style="position: absolute; left: 66.6667%; top: 0px;"
                    data-aos="fade-right" data-aos-duration="3000">
                    <a href="{{ route('portfolio') }}" class="img-card text-center portfolio-card white-bg " data-toggle="modal"
                        data-target="#project-modal-dr">
                        <img src="assets/images/pr7.png" alt="product" class="img-fluid">
                        <h4>
                            <span>Dr Misheal Abo Elmilh</span>
                            Website
                        </h4>
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .project-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .projects -->
<!-- newsletter starts -->
<section class="newsletter section-gap theme-bg-d newsletter__white">
    <div class="container">
        <h2 class="text-center">Sign up for our newsletter to stay up to
            <br>date with tech news!</h2>

        <form action="#" class="newsletter-form" method="POST">
            <div class="row justify-content-between">
                <div class="col-md">
                    <input type="text" name="fname" placeholder="Name">
                </div>
                <div class="col-md">
                    <input type="text" name="email" placeholder="Email">
                </div>

                <div class="col-md-auto">
                    <a href="#" class="custom-btn secondary-btn">SUBSCRIBE</a>
                </div>
            </div>
            <!-- End of .row -->
        </form>
    </div>
    <!-- End of .container -->
</section>
<!-- End of .newsletter -->


<!-- Projects Modal Starts -->
<div class="modal fade full-width-modal product-modal" id="project-modal-fixsira" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="modal-img text-center">
                            <img src="assets/images/pr4.png" alt="project-modal" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="modal-body__inner-content">
                            <h4>
                                <span>FIXSIRA App</span>
                                Website & Mobile App
                            </h4>
                            <p>
                                We formulate Apps that transform industries in Egypt, as we develop beautifully designed
                                & responsive applications to represent your brand in the digital world.Meet Fixsira our
                                Latest project, they aim to take the car industry in Egypt by storm and in order to do
                                that we have focused on Performance, UI/UX and the Responsiveness under any
                                circumstances, if you want a dependable app then this is the place for you.
                            </p>
                            <a href="https://fixsira.com" class="hyperlink" target="_blank">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<div class="modal fade full-width-modal product-modal" id="project-modal-dr" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="modal-img text-center">
                            <img src="assets/images/pr7.png" alt="project-modal" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="modal-body__inner-content">
                            <h4>
                                <span>Dr Misheal Abo Elmilh</span>
                                Website
                            </h4>
                            <p>
                                Medical reservations and Biography.
                            </p>
                            <a href="http://tabibi.codista.co/" class="hyperlink" target="_blank">Visit Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<div class="modal fade full-width-modal product-modal" id="project-modal-neur" tabindex="-1" role="dialog"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="modal-img text-center">
                            <img src="assets/images/pr5.png" alt="project-modal" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="modal-body__inner-content">
                            <h4>
                                <span>Neurology App</span>
                                Website & Mobile App
                            </h4>
                            <p>
                                Medical Conference app to manage bookib,purchases,agenda.
                            </p>
                            <a href="https://darelshefaa.fixsira.com/" class="hyperlink" target="_blank">Visit
                                Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<!-- End of .portfolio-Projects-modal -->

@endsection
