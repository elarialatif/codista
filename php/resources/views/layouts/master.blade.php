<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"  xmlns="https://www.w3.org/1999/xhtml" @if(session('lang')=='en') lang="en" dir="ltr"  @else lang="ar"  dir="rtl" @endif>
<!--<![endif]-->

<head>
    <title>Codista</title>
    <meta charset="utf-8">
    <!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="assets/images/favicon1.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/animations.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/main.css" class="color-switcher-link">
    <script src="assets/js/modernizr-2.6.2.min.js"></script>
</head>


<body class="preload">
    <!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
    <![endif]-->
    <div id="fb-root"></div>
      <script>
            window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v5.0'
            });
            };
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
      <div class="fb-customerchat" attribution=setup_tool page_id="110926383580978" theme_color="#13CF13">
      </div>
    <div class='Cube panelLoad'>
        <div class='cube-face cube-face-front'>c</div>
        <div class='cube-face cube-face-back'>i</div>
        <div class='cube-face cube-face-left'>o</div>
        <div class='cube-face cube-face-right'>s</div>
        <div class='cube-face cube-face-bottom'>d</div>
        <div class='cube-face cube-face-top'>t</div>
    </div>
    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form" action="/">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="btn">Search</button>
            </form>
        </div>
    </div>

    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls p-normal">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

        </div>
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas" class="">

        <div id="box_wrapper">

            <!-- template sections -->
    @include('includes.header')

    @yield('content')

    @include('includes.footer')

</div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->


<script src="assets/js/compressed.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/switcher.js"></script>
<script src="assets/js/ui.js"></script>
<script>
    AOS.init();
</script>
@yield('scripts')
</body>

</html>
