@extends('front_layout')

@section('content')
    <section class="banner-area-7 pt-lg-120 pt-90 pb-80 pb-lg-90 user-details-banner">
        <div class="banner-shapes">
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/img/add-question/banner-shape-1.png" alt="shape" />
            </div>
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/img/add-question/banner-shape-2.png" alt="shape" />
            </div>
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/img/add-question/banner-shape-3.png"
                    alt="shape" />
            </div>
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/img/add-question/banner-shape-4.png"
                    alt="shape" />
            </div>
        </div>
        <div class="container">
            <div class="row gy-3 pt-70 align-items-center">
                <div class="col-lg-8 d-sm-flex flex-lg-row flex-column align-items-center text-center text-sm-start">
                    <img class="rounded-circle" src="/img/user_details/user-img.png" alt="">
                    <div class="user-info ml-lg-60 ms-sm-5 mt-4 mt-lg-0">
                        <h3>{{auth()->user()->name}}</h3>
                        <ul class="list-unstyled mb-4">
                            <li>Web Developer</li>
                            <li>Boston, MA, United States</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <div class="social-widget text-lg-end">
                        <a class="wow fadeInUp" href="#"><i class="social_facebook"></i></a>
                        <a class="wow fadeInUp" data-wow-delay="0.3s" href="#"><i class="social_linkedin"></i></a>
                        <a class="wow fadeInUp" data-wow-delay="0.5s" href="#"><i class="social_instagram"></i></a>
                        <a class="wow fadeInUp" data-wow-delay="0.7s" href="#"><i class="social_twitter"></i></a>
                    </div>
                    <a class="action_btn ask_btn mt-35" href="/edit-profile">Edit Profile</a>
                </div>
            </div>
        </div>
    </section>
    <section class=" user-details-area bg-disable pt-100 pb-120">
        <div class="container">
            <div class="row  gy-lg-0">
                <div class="col-lg-12 col-xl-10">
                    <div class="user-details-widget">
                        <div class="widget-body">
                            <p class="user-text">I am a Graphic Designer based in New York, specializing in User
                                Interface Design and Development. I build clean, appealing, and functional
                                interfaces which comply with the latest web standards. But that’s just a part of it.
                                Design is my life. It’s my five-star spa. It’s my roller-coaster. It’s something I
                                do before going to bed, and something I can’t wait to do in the mornings. Without
                                it, my world would be black and white.”</p>

                            <h4>Basic Information</h4>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/calendar.png" alt=""> Age</h6>
                                    <p>25 Years</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/badge.png" alt=""> Experience</h6>
                                    <p>5 Years</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/phone.png" alt=""> Phone</h6>
                                    <p> <a href="tel:12345679">+1 (202) 456 789</a> </p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/location.png" alt=""> Location</h6>
                                    <p>Boston, MA, United States</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/envelope.png" alt=""> Email</h6>
                                    <p><a href="mailto:gustavo@ama.com">gustavo@ama.com</a></p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/link.png" alt=""> Visit site</h6>
                                    <p> <a href="https://www.ama.com/">www.ama.com</a></p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mt-30 gy-4 gy-xl-0">
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="/img/user_details/help-button.png" alt="">
                                </div>
                                <div>
                                    <p>Questions</p>
                                    <h5 class="counter">15</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="/img/user_details/comment.png" alt="">
                                </div>
                                <div>
                                    <p>Answers</p>
                                    <h5 class="counter">9</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="/img/user_details/crown.png" alt="">
                                </div>
                                <div>
                                    <p>Best Answers</p>
                                    <h5 class="counter">299</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="qna-statistics">
                                <div>
                                    <img src="/img/user_details/star.png" alt="">
                                </div>
                                <div>
                                    <p>Points</p>
                                    <h5 class="counter">5</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
