@extends('front_layout')

@section('content')
    <!--================Category Area =================-->
    <section class="forum-category-area pt-100 bg-disable pb-lg-115 pb-100">
        <div class="container">
            <h2 class="section-title-h2 text-center mb-60 text-center wow fadeinUp">Amas Categories</h2>
            <div class="row gy-lg-0 gy-4 justify-content-center">

                @foreach ($data['categories'] as $item)
                    <div class="col-custom wow fadeInUp">
                        <a href="{{ route('category.questions',$item->id) }}">
                            <div class="single-category-widget">
                                {{-- <img src="/img/home_three/forum-catagory-01.svg" alt="icon"> --}}
                                <h5>{{  $item->name }}</h5>
                            </div>
                        </a>
                    </div>
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
 
                        @foreach ($questions as $item)
                        <div class="single-forum-post-widget wow fadeInUp">
                            <div class="post-content">
                                <div class="post-title">
                                    <h6><a href="/question-details/{{$item->id}}">{{$item->title}}</a>
                                        <span><i class="icon_check_alt2"></i></span>
                                    </h6>
                                </div>
                                <div class="post-info">
                                    <div class="author">
                                        <img src="/img/user-circle-alt.svg" alt="icon">{{$item->user->name}}
                                    </div>
                                   
                                </div>
                                <div class="post-tags">
                                    <div class="single-tag tag-jq">{{$item->tags}}</div>
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
                         
                    </div>
                </div>

                <!--======= Right Sidebar =======-->
                
            </div>
        </div>
    </section>
    <!--================End All forum post Area =================-->


    <!--================Call To Action Area =================-->
    <section class="call-to-action cta-bg-3">
        <div class="bg-shapes">
            <div class="shape">
                <img data-parallax='{"x": -50, "y": 0, "rotateZ":0}' src="/img/home_three/cta-shape-1.png"
                    alt="">
            </div>
            <div class="shape">
                <img data-parallax='{"x": 100, "y": 0, "rotateZ":0}' src="/img/home_three/cta-shape-2.png"
                    alt="">
            </div>
            <div class="shape">
                <img data-parallax='{"x": 100, "y": 0, "rotateZ":0}' src="/img/home_three/cta-shape-3.png"
                    alt="">
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
