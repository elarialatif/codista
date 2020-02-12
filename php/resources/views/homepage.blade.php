@extends('layouts.master')
@section('content')
<section class="page_slider main_slider">
    <div class="flexslider" data-nav="true" data-dots="false">
        <ul class="slides">
            <li class="ds text-center slide1">
                <span class="flexslider-overlay"></span>
                <span class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/UBufeh1yv2c?feature=oembed&;showinfo=0&;autoplay=1&;controls=0&;mute=1&;loop=1&;playlist=UBufeh1yv2c" allowfullscreen=""></iframe>
                </span>
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <p class="text-uppercase intro_after_featured_word">welcome to</p>
                                    </div>

                                    <div class="intro_layer" data-animation="slideRight">
                                        <h2 class="text-uppercase intro_featured_word">
                                            codista software company
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h3 class="intro_before_featured_word">
                                            <span class="color-main2">Web Design</span>,
                                            <span class="color-main3">Marketing</span> &
                                            <span class="color-main4">Mobile apps</span>
                                        </h3>
                                    </div>
                                    <div class="intro_layer page-bottom" data-animation="expandUp">
                                        <a class="btn btn-maincolor" href="/services">Our Sercvices</a>
                                    </div>
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
            <li class="ds text-center slide2">
                <span class="flexslider-overlay"></span>
                <img src="assets/images/slide_02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h3 class="text-lowercase intro_before_featured_word">
                                            Online
                                        </h3>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h2 class="text-uppercase intro_featured_word">
                                            Marketing
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="pullDown">
                                        <p class="text-uppercase intro_after_featured_word">Solutions</p>
                                    </div>
                                    <div class="intro_layer page-bottom" data-animation="expandUp">
                                        <a class="btn btn-maincolor" href="/contact">Contact Us</a>
                                    </div>
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>
            <li class="ds text-center slide3">
                <img src="assets/images/slide_03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-12 itro_slider">
                            <div class="intro_layers_wrapper">
                                <div class="intro_layers">
                                    <div class="intro_layer" data-animation="fadeInRight">
                                        <h2 class="text-uppercase intro_featured_word light">
                                            Modern
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h2 class="text-uppercase intro_featured_word bold">
                                            Marketing & design
                                        </h2>
                                    </div>
                                    <div class="intro_layer" data-animation="fadeIn">
                                        <h2 class="text-uppercase intro_featured_word">
                                            That works
                                        </h2>
                                    </div>

                                    <div class="intro_layer page-bottom" data-animation="expandUp">
                                        <a class="btn btn-maincolor" href="/contact">Contact Us</a>
                                        <a class="btn btn-outline-maincolor" href="/">Our Works</a>
                                    </div>
                                </div>
                                <!-- eof .intro_layers -->
                            </div>
                            <!-- eof .intro_layers_wrapper -->
                        </div>
                        <!-- eof .col-* -->
                    </div>
                    <!-- eof .row -->
                </div>
                <!-- eof .container -->
            </li>

        </ul>
    </div>
    <!-- eof flexslider -->
    <div class="flexslider-bottom d-none d-xl-block">
        <a href="#about" class="mouse-button animated floating"></a>
    </div>
</section>
<div class="divider-10 d-block d-sm-none"></div>
<section class="s-pt-30 s-pt-lg-50 s-pt-xl-25 ls about-home" id="about">
    <div class="divider-5 d-none d-xl-block"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <div class="main-content text-center">
                    <div class="img-wrap text-center">
                        <img src="assets/images/vertical_line.png" alt="">
                        <div class="divider-35"></div>
                    </div>
                    <h5>
                        We are one of the most effective Web Design Companies
                    </h5>
                    <p>
                        Getting online is easy. Succeeding online is a different story. You’ll need more than just a beautiful website to stand out these days.
                        <strong>Online marketing solutions.</strong> Conversion-based web design coupled with a lead generating marketing plan, your online success is inevitable.
                    </p>
                    <div class="divider-30"></div>
                    <div class="img-wrap text-center">
                        <img src="assets/images/vertical_line.png" alt="">
                    </div>
                    <div>
                        <div class="divider-40"></div>
                        <button type="button" class="btn btn-outline-maincolor">Our Services</button>
                        <div class="divider-40"></div>
                    </div>
                    <div class="img-wrap text-center">
                        <img src="assets/images/vertical_line.png" alt="">
                    </div>
                    <div class="divider-10 d-none d-xl-block"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider-10 d-block d-sm-none"></div>
</section>

<section class="s-pt-30 s-pb-3 service-item2 ls animate" id="services" data-animation="fadeInUp">
    <div class="container">
        <div class="row c-mb-50 c-mb-md-60">
            <div class="d-none d-lg-block divider-20"></div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="vertical-item text-center">
                    <div class="item-media">
                        <img src="assets/images/service_icon_1-1.png" alt="">
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="/services">Marketing</a>
                        </h6>

                        <p>
                            We use strategic marketing tactics that have been proven to work.
                        </p>

                    </div>
                </div>
            </div>
            <!-- .col-* -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="vertical-item text-center">
                    <div class="item-media">
                        <img src="assets/images/service_icon_2-1.png" alt="">
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="/services">Mobile Development</a>
                        </h6>

                        <p>
                            Custom programming for most complex functions you can think.
                        </p>

                    </div>
                </div>
            </div>
            <!-- .col-* -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="vertical-item text-center">
                    <div class="item-media">
                        <img src="assets/images/service_icon_3-1.png" alt="">
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="/services">Web Design</a>
                        </h6>

                        <p>
                            A responsive website leads to a better user experience.
                        </p>
                    </div>
                </div>
            </div>
            <!-- .col-* -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="vertical-item text-center">
                    <div class="item-media">
                        <img src="assets/images/service_icon_4-1.png" alt="">
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="/services">SEO Optimization</a>
                        </h6>

                        <p>
                            Optimizing our web designs to rank on the first page of google is our specialty.
                        </p>
                    </div>
                </div>
            </div>
            <!-- .col-* -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="vertical-item text-center">
                    <div class="item-media">
                        <img src="assets/images/service_icon_5-1.png" alt="">
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="/services">Ecommerce</a>
                        </h6>

                        <p>
                            We build your online store using a flexible, modular platform that allows
                        </p>

                    </div>
                </div>
            </div>
            <!-- .col-* -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="vertical-item text-center">
                    <div class="item-media">
                        <img src="assets/images/service_icon_6-1.png" alt="">
                    </div>
                    <div class="item-content">
                        <h6>
                            <a href="/services">Branding</a>
                        </h6>

                        <p>
                            A solid brand strategy, logo and guidelines help you to get You recognized.
                        </p>

                    </div>
                </div>
            </div>
            <!-- .col-* -->
        </div>
        <div class="pink-line text-center">
            <img src="assets/images/pink_line_big.png" alt="">
        </div>
    </div>
</section>


<section class="s-pt-100 s-pt-lg-130 ds process-part skew_right s-parallax top_white_line_big overflow-visible" id="steps">
    <div class="container">
        <div class="divider-65"></div>
        <div class="row align-items-center c-mb-20 c-mb-lg-60" data-aos="zoom-in">
            <div class="col-12 col-lg-4">
                <div class="step-left-part text-right">
                    <h2 class="step-title">
                        <span class="color-main">01</span>Strategy</h2>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="step-center-part text-center">
                    <img src="assets/images/step_img_1.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="step-right-part">
                    <p class="step-text">We define your competition and target audience. Discover what is working in your online industry, then design your website accordingly.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center right c-mb-20 c-mb-lg-60" data-aos="flip-right" data-aos-duration="5000">
            <div class="col-12 col-lg-4  order-lg-3">
                <div class="step-left-part">
                    <h2 class="step-title color1">
                        <span class="color-main2">02</span>Design</h2>
                </div>
            </div>
            <div class="col-12 col-lg-4 order-lg-2">
                <div class="step-center-part text-center">
                    <img src="assets/images/step_img_2.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-4 order-lg-1 text-right">
                <div class="step-right-part ">
                    <p class="step-text">Color scheme, layout, sitemap, and style. We will bring your brand to life with a one of a kind masterpiece, built just for you.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center c-mb-20 c-mb-lg-60" data-aos="flip-left" data-aos-duration="6000">
            <div class="col-12 col-lg-4">
                <div class="step-left-part text-right part3">
                    <h2 class="step-title">
                        <span class="color-main3">03</span>Develop</h2>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="step-center-part text-center">
                    <img src="assets/images/step_img_3.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="step-right-part">
                    <p class="step-text">We turn your ideas into a reality. &our website is placed on a "development server" where you get to watch the whole process, live.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center right c-mb-20 c-mb-lg-60" data-aos="flip-right" data-aos-duration="7000">
            <div class="col-12 col-lg-4  order-lg-3">
                <div class="step-left-part part4">
                    <h2 class="step-title color1">
                        <span class="color-main4">04</span>Support</h2>
                </div>
            </div>
            <div class="col-12 col-lg-4 order-lg-2">
                <div class="step-center-part text-center last">
                    <img src="assets/images/step_img_2.jpg" alt="">
                </div>
            </div>
            <div class="col-12 col-lg-4 order-lg-1 text-right">
                <div class="step-right-part ">
                    <p class="step-text">This is where you go live, to the world. Design, marketing, and maintenance; we'll be at your side for the life of your site.</p>
                </div>
            </div>
        </div>
        <div class="divider-10 d-block d-sm-none"></div>
        <div class="img-wrap text-center">
            <img src="assets/images/vertical_line2.png" alt="">
        </div>
        <div class="divider-30 d-none d-xl-block"></div>
    </div>
</section>

<section class="s-pt-75 s-pt-xl-50 gallery-carousel main-gallery container-px-0" id="gallery">
    <div class="container-fluid">
        <div class="img-wrap text-center">
            <img src="assets/images/vertical_line.png" alt="">
            <div class="divider-40 d-block d-sm-none"></div>
        </div>
    </div>
</section>



<section class="s-pt-130 s-pb-15 s-pb-md-50 s-pt-xl-100 s-pb-lg-30 overflow-visible s-parallax testimonials-sliders main-testimonials ds" id="testimonials">
    <div class="corner ls ms"></div>
    <div class=" white-button text-center">
        <a class="btn white-btn" href="#testimonials">Our
            Happy Customers
        </a>
    </div>
    <div class="container">
        <div class="row c-mt-30 c-mt-md-0">
            <div class="text-center img-wrap line col-md-12">
                <img src="assets/images/vertical_line2.png" alt="">
            </div>
            <div class="col-md-12">
                <div class="owl-carousel" data-autoplay="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true" id="quote">
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            Fixsira-automotive solution Company
                        </p>
                        <h5>
                            <a href="/">Reem Rashed</a>
                        </h5>
                        <p>
                            <em class="big">
                                The team at Codista did a wonderful unique mobile App with latest cutting-edge technology. What I most appreciated about their service was how quickly they responded to my emails! Discussg many scenarios to get the most effective case. Very impressive and professional. I highly recommend to anyone or any business who needs create innovative application with new idea under new technology implementation. Thank you.                           
                            </em>
                        </p>

                    </div>
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            Invision  LLC
                        </p>
                        <h5>
                            <a href="/">Radwa al mahrouky</a>
                        </h5>
                        <p>
                            <em class="big">
                                Codista did a fantastic job on the development of my website. They were able to meet my specifications and the final product is exactly as I hoped it would be. They are very flexible, responsive, knowledgeable, and friendly. I recommend them wholeheartedly.
                            </em>
                        </p>

                    </div>
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            Homis Painting Systems
                        </p>
                        <h5>
                            <a href="/">Ahmed samy</a>
                        </h5>
                        <p>
                            <em class="big">
                                Codista has made a significant improvement by re-designing our Mobile App. Our experience with them has been a great one and we highly recommend them to anybody who is looking for a real expert and a professional.
                            </em>
                        </p>

                    </div>
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            Seagull hotel
                        </p>
                        <h5>
                            <a href="/">Tamer gmal</a>
                        </h5>
                        <p>
                            <em class="big">
                                I highly recommend Codista for SEO services. Their work is professional, efficient, and collaborative!                            
                            </em>
                        </p>

                    </div>
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            hayah international  school
                        </p>
                        <h5>
                            <a href="/">Mohamed selim</a>
                        </h5>
                        <p>
                            <em class="big">
                                We've been a happy client of Codista for two years in social media services. They always deliver high-quality, efficient work on a reasonable budget.                           
                            </em>
                        </p>

                    </div>
                    
                    <div class="quote-item">
    
                        <p class="small-text author-job">
                            Naseej Advanced Solution
                        </p>
                        <h5>
                            <a href="/">Michael adly</a>
                        </h5>
                        <p>
                            <em class="big">
                                Codista`s team were extremely easy to work with and did a great job designing my website and -- through their diligent SEO efforts -- making sure prospects can find it. My questions are often answered in minutes, and assistance with any issue is freely available. Within just weeks of the new site's launch, inquiries increased noticeably, and many have turned into profitable clients. I wholeheartedly recommend Codista, and plan to use them again for another business I'm involved with.
                            </em>
                        </p>

                    </div>
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            shehata tires 
                        </p>
                        <h5>
                            <a href="/">Mohamed shahata</a>
                        </h5>
                        <p>
                            <em class="big">
                                I am very happy to work with Codista. In the business I am in, we are always able to find the best vendor for us. The team, is very talented and strives for perfection. Five stars deserved, no doubt about it!
                            </em>
                        </p>

                    </div>
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            nawawy pharmacy 
                        </p>
                        <h5>
                            <a href="/">Dr.mohamed el azayzi</a>
                        </h5>
                        <p>
                            <em class="big">
                                What a great experience with Codista, the team are creative, easy to work with and had many ideas for our website. Their work is truly quality oriented. codista is professional, responsive and diligent. Management is very happy with the finished product, and we would work with codista again.
                            </em>
                        </p>

                    </div>
                    <div class="quote-item">
                        
                        <p class="small-text author-job">
                            fashion atelier 
                        </p>
                        <h5>
                            <a href="/">Dalia al atrebi</a>
                        </h5>
                        <p>
                            <em class="big">
                                We were referred to the codista team when we were totally frustrated with our previous host company. We discussed other companies, but once we started working with codista, we never looked back; a completely wonderful experience. codista was very responsive to all of our questions, explained everything in detail, was patient in working through issues with our previous host, and redesigned our site to make it so much better than before! I would highly recommend the codista’s team!
                            </em>
                        </p>

                    </div>
                </div>
                <!-- .testimonials-slider -->
            </div>
            <div class="divider-55 d-none d-md-block"></div>
            <div class="text-center img-wrap col-md-12">
                <img src="assets/images/vertical_line2.png" alt="">
            </div>
            <div class="divider-10 d-none d-md-block"></div>
        </div>
    </div>
    <div class="testimonials-btn text-center">
        <a href="#quote" class="btn-maincolor">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
    <div class="corner corner-light"></div>
</section>

<section class="s-pt-130 s-pt-md-50 ls text-section">
    <div class="divider-30"></div>
    <div class="container">
        <div class="row">
            <div class="text-center col-md-12 justify-content-center text-block">
                <img src="assets/images/vertical_line.png" alt="">
                <div class="divider-35"></div>
                <div class="content">
                    <h1>
                        Lets Get Started
                        <br> Your Project
                    </h1>
                    <p>
                        We’ll help to achieve your goals and to grow business
                    </p>
                    <div class="divider-30"></div>
                </div>
                <img src="assets/images/vertical_line.png" alt="">
                <div>
                    <div class="divider-40"></div>
                    <a href="#contact" class="btn btn-outline-maincolor">Let’s Talk!</a>
                    <div class="divider-30"></div>
                </div>
                <div class="img-wrap overflow-visible">
                    <img src="assets/images/vertical_line.png" alt="">
                    <div class="divider-5 d-none d-xl-block"></div>
                </div>
            </div>

        </div>
    </div>
</section>



@endsection
