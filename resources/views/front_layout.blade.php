<!doctype html>
<html lang="en">


@include('frontend.includes.head')

<body data-scroll-animation="true">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="round_spinner">
                <div class="spinner"></div>
                <div class="text">
                    <img src="/img/spinner_logo.png" alt="">
                    <h4><span>Ama</span></h4>
                </div>
            </div>
            <h2 class="head">Did You Know?</h2>
            <p></p>
        </div>
    </div>
    <div class="body_wrapper">
        <div class="click_capture"></div>
        <!--================Navbar Area =================-->
        @include('frontend.includes.all_navbar')
        <!--================Banner Area =================-->
        <section class="banner-area-4 pt-lg-120 pt-55 pb-120 has_search">
            <div class="banner-shapes">
                <div class="shape">
                    <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/img/home_three/banner-shape-1.png"
                        alt="shape">
                </div>
                <div class="shape">
                    <img data-parallax='{"x":50 , "y": 0, "rotateZ":0}' src="/img/home_three/banner-shape-2.png"
                        alt="shape">
                </div>
                <div class="shape">
                    <img data-parallax='{"x": 250, "y": 0, "rotateZ":0}' src="/img/home_three/banner-shape-3.png"
                        alt="shape">
                </div>

            </div>
            <div class="container">
                <div class="row pt-120 pb-30">
                    <div class="col-lg-9 doc_banner_content search-banner-light text-center mx-auto pt-20">
                        <h1 class="banner-title-h1 mb-4">Need some help with Ama?</h1>
                        <form action="#" class="header_search_form-2 mx-auto">
                            <div class="header_search_form_info">
                                <div class="form-group">        
                                    <div class="input-wrapper">
                                        <i class="icon_search"></i>
                                        <input type='search' id="searchbox" autocomplete="off" name="q"
                                            placeholder="Search..." value="{{old('q')}}" />

                                        <div class="header_search_form_panel">
                                            <ul class="list-unstyled">
                                                <li>Help Desk
                                                    <ul class="list-unstyled search_item">
                                                        <li><span>Configuration</span><a href="#">How to edit
                                                                host and
                                                                port?</a></li>
                                                        <li><span>Configuration</span><a href="#">The dev
                                                                Property</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>Support
                                                    <ul class="list-unstyled search_item">
                                                        <li><span>Pages</span><a href="#">The asyncData
                                                                Method</a></li>
                                                    </ul>
                                                </li>
                                                <li>Documentation
                                                    <ul class="list-unstyled search_item">
                                                        <li><span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                        <li><span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                        <li><span>Getting Started</span><a href="#">The asyncData
                                                                Method</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- <div class="header_search_keyword search-white mt-3">
                                <span class="header-search-form__keywords-label">Popular topics:</span>
                                <ul class="list-unstyled">
                                    <li class="wow fadeInUp" data-wow-delay="0.2s"><a href="#">Forums</a>,
                                    <li>
                                    <li class="wow fadeInUp" data-wow-delay="0.3s"><a href="#">Getting
                                            stated</a>,</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.3s"><a
                                            href="#">Introduction</a>,</li>
                                    <li class="wow fadeInUp" data-wow-delay="0.4s"><a href="#">Payment</a></li>
                                </ul>
                            </div> --}}
                        </form>


                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        @yield('content')

        <!--================Footer Area =================-->
        <footer class="footer-4 pt-110">
            <div class="footer-shapes">
                <div class="shape">
                    <img data-parallax='{"x": -50, "y": 0, "rotateZ":0}' src="/img/footer/shape-3.png"
                        alt="">
                </div>
                <div class="shape">
                    <img data-parallax='{"x": -00, "y": 0, "rotateZ":0}' src="/img/footer/shape-4.png"
                        alt="">
                </div>
                <div class="shape">
                    <img data-parallax='{"x":0, "y": 100, "rotateZ":0}' src="/img/footer/shape-5.png"
                        alt="">
                </div>
            </div>
            <div class="container">
                <div class="footer-top pt-120 pb-40">
                    <div class="row gy-3 gy-lg-0 align-items-center">
                        <div class="col-lg-2">
                            <div class="footer-widget pr-20">
                                <a href="#"> <img src="/img/logo-w.png" alt="logo"></a>
                            </div>
                        </div>

                        <div class="col-md-6 wow fadeinUp">
                            <div class="footer-menu">
                                <ul class="list-unstyled link-list d-flex ">
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">Contatct</a></li>
                                    <li><a href="#">Forums</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 ">
                            <div class="footer-social-widget text-md-end">
                                <a class="wow fadeInUp" href="#"><i class="social_facebook "></i></a>
                                <a class="wow fadeInUp" data-wow-delay="0.3s" href="#"><i
                                        class="social_linkedin "></i></a>
                                <a class="wow fadeInUp" data-wow-delay="0.5s" href="#"><i
                                        class=" social_instagram"></i></a>
                                <a class="wow fadeInUp" data-wow-delay="0.7s" href="#"><i
                                        class="social_twitter "></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="footer-bottom pt-40 pb-40">
                    <div class="d-flex justify-content-between flex-wrap align-items-center">
                        <ul class="footer-menu list-unstyled mb-3 mb-md-0 wow fadeInRight">
                            <li><a href="#">Terms & conditions</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Cookies policy</a></li>
                            <li><a href="#">Copyrights Notification </a></li>
                        </ul>
                        <p class="wow fadeinLeft"> &copy; 2021 Ama - All Rights Reserved</p>

                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
    </div>

    <!-- Back to top button -->
    <a id="back-to-top" title="Back to Top"></a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/pre-loader.js"></script>
    <script src="/js/jquery.parallax-scroll.js"></script>
    <script src="/assets/counterup/jquery.counterup.min.js"></script>
    <script src="/assets/counterup/jquery.waypoints.min.js"></script>
    <script src="/assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="/assets/wow/wow.min.js"></script>
    <script src="/assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/plugins.js"></script>

    <script src="/js/main.js"></script>
</body>


</html>
