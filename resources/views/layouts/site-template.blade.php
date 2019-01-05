<!DOCTYPE html>

<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Counseling - Best Psychology & Counseling HTML5 Template"/>
    <meta name="keywords" content="chiropractor, counseling, healthcare, psychiatrist, psychologist, psychology"/>
    <meta name="author" content="ThemeMascot"/>

    <!-- Page Title -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{ asset('site/images/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link href="{{ asset('site/images/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('site/images/apple-touch-icon-72x72.png') }}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('site/images/apple-touch-icon-114x114.png') }}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{ asset('site/images/apple-touch-icon-144x144.png') }}" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="//fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('site/css/jquery-ui.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('site/css/owl.carousel.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('site/css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('site/css/css-plugin-collections.css') }}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{ asset('site/css/menuzord-skins/menuzord-rounded-boxed.css') }}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{ asset('site/css/style-main.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{ asset('site/css/preloader.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{ asset('site/css/custom-bootstrap-margin-padding.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{ asset('site/css/responsive.css') }}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->

    <!-- CSS | Theme Color -->
    <link href="{{ asset('site/css/colors/theme-skin-green.css') }}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{ asset('site/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-plugin-collection.js') }}"></script>
    @yield('extra_styles')
</head>
<body class="">
<div id="wrapper" class="clearfix">
    <!-- preloader -->

    <!-- Header -->
    @include('site.components.header')

    <!-- Start main-content -->
    <div class="main-content">
        @yield('body-content')
    </div>
    <!-- end main-content -->

    <!-- Footer -->
    <footer id="footer" class="footer" data-bg-img="{{ asset('site/images/footer-bg.png') }}" data-bg-color="#25272e">
        <div class="container pt-70 pb-40">
            <div class="row border-bottom-black">
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h2 style="color:white">
                            LOGO
                        </h2>
                        <p>Your Office Address</p>
                        <ul class="list-inline mt-5">
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-phone text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#">+xxx-xxx-xxxx</a></li>
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-envelope-o text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#">contact@yourdomain.com</a></li>
                            <li class="m-0 pl-10 pr-10"><i class="fa fa-globe text-theme-colored mr-5"></i> <a
                                        class="text-gray" href="#">www.yourdomain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Latest News</h5>
                        <div class="latest-posts">
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                            <article class="post media-post clearfix pb-0 mb-10">
                                <a href="#" class="post-thumb"><img alt="" src="http://placehold.it/80x55"></a>
                                <div class="post-right">
                                    <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                    <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Useful Links</h5>
                        <ul class="list angle-double-right list-border">
                            <li><a href="#">Questionnaire</a></li>
                            <li><a href="#">Matches</a></li>
                            <li><a href="#">Favorites</a></li>
                            <li><a href="#">Benefits</a></li>
                            <li><a href="#">Reimbursements</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title line-bottom">Opening Hours</h5>
                        <div class="opening-hours">
                            <ul class="list-border">
                                <li class="clearfix"><span> Mon - Tues :  </span>
                                    <div class="value pull-right"> 6.00 am - 10.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Wednes - Thurs :</span>
                                    <div class="value pull-right"> 8.00 am - 6.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Fri : </span>
                                    <div class="value pull-right"> 3.00 pm - 8.00 pm</div>
                                </li>
                                <li class="clearfix"><span> Sun : </span>
                                    <div class="value pull-right"> Colosed</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-10">
                <div class="col-md-5">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Subscribe Us</h5>
                        <!-- Mailchimp Subscription Form Starts Here -->
                        <form id="mailchimp-subscription-form-footer" class="newsletter-form">
                            <div class="input-group">
                                <input type="email" value="" name="EMAIL" placeholder="Your Email"
                                       class="form-control input-lg font-16" data-height="45px" id="mce-EMAIL-footer"
                                       style="height: 45px;">
                                <span class="input-group-btn">
                  <button data-height="45px" class="btn btn-colored btn-theme-colored btn-xs m-0 font-14" type="submit">Subscribe</button>
                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Call Us Now</h5>
                        <div class="text-gray">
                            +xxx-xxx-xxxx <br>
                            +xxx-xxx-xxxx
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget dark">
                        <h5 class="widget-title mb-10">Connect With Us</h5>
                        <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black-333">
            <div class="container pt-15 pb-10">
                <div class="row">
                    <div class="col-md-6">
                        <p class="font-11 text-black-777 m-0">Copyright &copy;2018 iWebNext. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <div class="widget no-border m-0">
                            <ul class="list-inline sm-text-center mt-5 font-12">
                                <li>
                                    <a href="#">FAQ</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Help Desk</a>
                                </li>
                                <li>|</li>
                                <li>
                                    <a href="#">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

@yield('extra_scripts')
</body>
</html>