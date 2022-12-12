@extends('front_layout')

@section('content')
    <!--================Category Area =================-->
    <section class="forum-category-area pt-100 bg-disable pb-lg-115 pb-100">
        <div class="container">
            <h2 class="section-title-h2 text-center mb-60 text-center wow fadeinUp">Amas Categories</h2>
            <div class="row gy-lg-0 gy-4 justify-content-center">

                @foreach ($data['categories'] as $item)
                    <div class="col-custom wow fadeInUp">
                        <a href="{{ route('category.questions', $item->id) }}">

                            <div class="single-category-widget">
                                {{-- <img src="/img/home_three/forum-catagory-01.svg" alt="icon"> --}}
                                <h5>{{ $item->name }}</h5>
                            </div>
                        </a>
                    </div>
                    <br><br>
                @endforeach

            </div>

        </div>
    </section>
    <!--================End Category Area =================-->


    <!--================All forum post Area =================-->
    <section class="bg-disable pb-100">
        <div class="container">
            <div class="row gy-lg-0 gy-4">

                <!--======= Left bar ======-->
                <div class="col-lg-8 ">
                    <div class="forum-post-widget">
                        <div class="widget-header d-flex align-items-center justify-content-between mb-30">
                            <h2 class="mb-0 wow fadeInRight">Ama</h2>

                            <a href="/ask-question" class="action_btn btn-text-medium wow fadeInLeft">Post a
                                Question</a>
                        </div>

                        {{-- <div class="post-filter-widget mb-20 wow fadeInUp">
                            <div class="single-filter-item ">
                                <input type="radio" name="post_filter" id="all_filt">
                                <label for="all_filt">
                                    <img class="main-img" src="/img/home_three/filter-icon-1.1.png" alt="icon">
                                    <img class="hover-img" src="/img/home_three/filter-icon-1.2.png" alt="icon"> All
                                </label>
                            </div>
                            <div class="single-filter-item">
                                <input type="radio" name="post_filter" id="populer_filt">
                                <label for="populer_filt">
                                    <img class="main-img" src="/img/home_three/filter-icon-2.1.png" alt="icon">
                                    <img class="hover-img" src="/img/home_three/filter-icon-2.2.png" alt="icon">
                                    Popular
                                </label>
                            </div>
                            <div class="single-filter-item">
                                <input type="radio" name="post_filter" id="featured_filt">
                                <label for="featured_filt">
                                    <img class="main-img" src="/img/home_three/filter-icon-3.1.png" alt="icon">
                                    <img class="hover-img" src="/img/home_three/filter-icon-3.2.png" alt="icon">
                                    Featured
                                </label>
                            </div>
                            <div class="single-filter-item">
                                <input type="radio" name="post_filter" id="recent_filt">
                                <label for="recent_filt">
                                    <img class="main-img" src="/img/home_three/filter-icon-4.1.png" alt="icon">
                                    <img class="hover-img" src="/img/home_three/filter-icon-4.2.png" alt="icon">
                                    Recent
                                </label>
                            </div>
                            <div class="single-filter-item">
                                <input type="radio" name="post_filter" id="unsolved_filt">
                                <label for="unsolved_filt">
                                    <img class="main-img" src="/img/home_three/filter-icon-5.1.png" alt="icon">
                                    <img class="hover-img" src="/img/home_three/filter-icon-5.2.png" alt="icon">
                                    Unsolved
                                </label>
                            </div>
                            <div class="single-filter-item">
                                <input type="radio" name="post_filter" id="solved_filt">
                                <label for="solved_filt">
                                    <img class="main-img" src="/img/home_three/filter-icon-6.1.png" alt="icon">
                                    <img class="hover-img" src="/img/home_three/filter-icon-6.2.png" alt="icon">
                                    Solved
                                </label>
                            </div>
                        </div> --}}
                        @foreach ($questions as $item)
                            <div class="single-forum-post-widget wow fadeInUp">
                                <div class="post-content">
                                    <div class="post-title">
                                        <h6><a href="/question-details/{{ $item->id }}">{{ $item->title }}</a>
                                            <span><i class="icon_check_alt2"></i></span>
                                        </h6>
                                    </div>
                                    <div class="post-info">
                                        <div class="author">
                                            <img src="/img/user-circle-alt.svg" alt="icon">{{ $item->user->name }}
                                        </div>

                                    </div>
                                    <div class="post-tags">
                                        <div class="single-tag tag-jq">{{ $item->tags }}</div>
                                    </div>
                                </div>
                                <div class="post-reach">
                                    <div class="post-view">
                                        <img src="/img/forum/eye-outline.svg" alt="icon">{{ $item->view }} Views
                                    </div>
                                    {{-- <div class="post-like">
                                    <img src="/img/forum/thumbs-up-outline.svg" alt="icon">250 Likes
                                </div>
                                <div class="post-comment">
                                    <img src="/img/forum/chatbubbles-outline.svg" alt="icon">155 Replies
                                </div> --}}
                                </div>
                            </div>
                        @endforeach

                        {{ $questions->links('vendor.pagination.custom_paginate') }}

                    </div>
                </div>

                <!--======= Right Sidebar =======-->
                <div class="col-lg-4">
                    <div class="forum-right-sidebar-widget pl-lg-40">
                        <div class="single-widget-box stat-widget mt-40">
                            <div class="widget-header">
                                <img src="/img/statistics-icon.png" alt="icon">
                                <h5>Ama Statistics</h5>
                            </div>
                            <div class="row gx-0">
                                <div class="col-4 text-center py-4">
                                    <img src="/img/speech-bubble.png" alt="">
                                    <p>Topics</p>
                                    <h5>{{ $data['cat_count'] }}</h5>
                                </div>
                                <div class="col-4 text-center py-4 border-end border-start">
                                    <img src="/img/writing.png" alt="">
                                    <p>Posts</p>
                                    <h5>{{ $data['post_count'] }}</h5>
                                </div>
                                <div class="col-4 text-center py-4">
                                    <img src="/img/user-icon.png" alt="">
                                    <p>Users</p>
                                    <h5>{{ $data['user_count'] }}</h5>
                                </div>
                            </div>
                        </div>

                        <div class="single-widget-box populer-topics mt-40">
                            <div class="widget-header">
                                <img src="/img/speech-bubble.png" alt="icon">
                                <h5>Recent Topics</h5>
                            </div>
                            <div class="widget-content">
                                @foreach ($data['popular_topics'] as $item)
                                    <div class="single-topic">
                                        <span class="topic-no">{{ $loop->index + 1 }}</span>
                                        <div class="topic-content">
                                            <h6><a
                                                    href="{{ route('question.details', $item->id) }}">{{ $item->title }}</a>
                                            </h6>
                                            <div class="topic-info">
                                                <div>
                                                    <img src="/img/forum/topic-user-outline.svg" alt="">
                                                    <span>{{ $item->user->name }}</span>
                                                </div>
                                                <div>
                                                    <img src="/img/forum/topic-calendar-outline.png" alt="">
                                                    <span>{{ $item->created_at->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>

                        <div class="single-widget-box helpful-user mt-40">
                            <div class="widget-header">
                                <img src="/img/user-icon.png" alt="icon">
                                <h5>Most Helpful Users</h5>
                            </div>
                            <div class="widget-content">
                                @foreach ($data['top_users'] as $item)
                                    <div class="single-user">
                                        <div class="user-img active">
                                            <img src="/images/profile/{{ $item->userMeta->image ?? null }}" alt="img"
                                                style="height: 50px; width: 50px;">

                                        </div>
                                        <div class="user-info">
                                            <h6><a href="#">{{ $item->name }}</a></h6>
                                            <span>{{ $item->points }} points</span>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        {{-- <div class="single-widget-box tag-widget mt-40">
                            <div class="widget-header">
                                <img src="/img/tags-icon.png" alt="icon">
                                <h5>Tags</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="widget-tag-list-2 list-unstyled">
                                    <li> <a class="tag-jq" href="#">jQuery</a> </li>
                                    <li> <a class="tag-php" href="#">PHP</a> </li>
                                    <li> <a class="tag-wp" href="#">WordPress</a> </li>
                                    <li> <a class="tag-dvlp" href="#">Development</a> </li>
                                    <li> <a class="tag-foram" href="#">Ama</a> </li>
                                    <li> <a class="tag-hlp" href="#">help desk</a> </li>
                                    <li> <a class="tag-js" href="#">JavaScript</a> </li>
                                    <li> <a class="tag-sprt" href="#">support</a> </li>
                                    <li> <a class="tag-ecmrc" href="#">ecommerce</a> </li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End All forum post Area =================-->


    <!--================Call To Action Area =================-->
    <section class="call-to-action cta-bg-3">
        <div class="bg-shapes">
            <div class="shape">
                <img data-parallax='{"x": -50, "y": 0, "rotateZ":0}' src="/img/home_three/cta-shape-1.png" alt="">
            </div>
            <div class="shape">
                <img data-parallax='{"x": 100, "y": 0, "rotateZ":0}' src="/img/home_three/cta-shape-2.png" alt="">
            </div>
            <div class="shape">
                <img data-parallax='{"x": 100, "y": 0, "rotateZ":0}' src="/img/home_three/cta-shape-3.png" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row action-content-wrapper justify-content-between gy-4 gy-lg-0">
                <div class="col-lg-8 mt-0">
                    <div class="action-title-wrap title-img d-block d-sm-flex">
                        <img src="/img/home_three/cta-emo.png" alt="">
                        <div>
                            <h2 class="action-title">New to Communities?</h2>
                            <p>Its members are ambitious local authorities and development corporations planning and
                                delivering exemplary</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 text-lg-end text-center">
                    <a href="/ask-question" class="action_btn">Ask a Question </a>
                </div>
            </div>
        </div>
    </section>
    <!--================End Call To Action Area =================-->
@endsection
