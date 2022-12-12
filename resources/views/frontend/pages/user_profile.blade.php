@extends('front_layout')

@section('content')
    <section class="banner-area-7 pt-lg-120 pt-90 pb-80 pb-lg-90 user-details-banner">
        <div class="banner-shapes">
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/img/add-question/banner-shape-1.png"
                    alt="shape" />
            </div>
            <div class="shape">
                <img data-parallax='{"x": 50, "y": 0, "rotateZ":0}' src="/img/add-question/banner-shape-2.png"
                    alt="shape" />
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
                    <img class="rounded-circle"
                        src="/images/profile/{{ auth()->user()->userMeta->image ?? null }}"height="100" width="100"
                        alt="">
                    <div class="user-info ml-lg-60 ms-sm-5 mt-4 mt-lg-0">
                        <h3>{{ auth()->user()->name }}</h3>
                        @if (auth()->user()->points >= 100)
                            <span class="badge badge-pill badge-primary">Diamond</span>
                        @elseif(auth()->user()->points >= 80 && auth()->user()->points <= 99)
                            <span class="badge badge-pill badge-primary">Gold</span>
                        @elseif(auth()->user()->points >= 60 && auth()->user()->points <= 79)
                            <span class="badge badge-pill badge-primary">Silver</span>
                        @elseif(auth()->user()->points >= 1 && auth()->user()->points <= 59)
                            <span class="badge badge-pill badge-primary">Bronze</span>
                        @else
                        @endif



                        <ul class="list-unstyled mb-4">
                            <li>{{auth()->user()->userMeta->proffession}}</li>
                            <li>{{auth()->user()->userMeta->location}}</li>
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
                    @if (auth()->user()->is_admin == true)
                        <a class="action_btn ask_btn mt-35" href="/admin-dashboard">Admin Pnael</a>
                    @endif
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
                            <p class="user-text">{{ auth()->user()->userMeta->bio }}</p>

                            <h4>Basic Information</h4>
                            <div class="row mt-3">
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/calendar.png" alt=""> Age</h6>
                                    <p>{{auth()->user()->userMeta->age}} Years</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/badge.png" alt=""> Experience</h6>
                                    <p>{{auth()->user()->userMeta->experience}} Years</p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/phone.png" alt=""> Phone</h6>
                                    <p> <a href="tel:{{auth()->user()->userMeta->phone}}">{{auth()->user()->userMeta->phone}}</a> </p>
                                </div>
                                <div class="col-md-4">
                                    <h6><img src="/img/user_details/location.png" alt=""> Location</h6>
                                    <p>{{auth()->user()->userMeta->location}}</p>
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
                                    <p><a href="{{ route('user.posts') }}">Posts</a></p>
                                    <h5 class="counter">{{ $questions_count ?? null }}</h5>
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
                                    <h5 class="counter">{{ $data['answer_count'] ?? null }}</h5>
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
                                    <h5 class="counter">{{ $data['best_answer_count'] ?? null }}</h5>
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
                                    <h5 class="counter">{{ auth()->user()->points ?? null }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
