@extends('layouts.app')

@section('content')

<section 
    class="blogs-top-container" 
    style="
        background: url(<?php bloginfo('template_url') ?>/assets/images/careers-cover.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    ">
    <h2 class="single-case-header">If it's on our mind, it should be on yours too</h2>

    <div class="follow-container" style="top: 30vh">
        <div class="">
            <h5>FOLLOW US</h5>
        </div>
        <div class="icons">
            <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter"></i>
            <i class="bi bi-instagram"></i>
            <i class="bi bi-messenger"></i>
            <i class="bi bi-linkedin"></i>        
        </div>
    </div>

    <!-- <div class="row arrows-container">
        <div class="col arrows">
            <img src="<?php bloginfo('template_url') ?>/assets/images/arrrow-down-group.svg" alt="" />
        </div>
        <div class="col arrows" style="visibility: hidden">
            <img src="<?php bloginfo('template_url') ?>/assets/images/arrow-up-group.svg" alt="" />
        </div>
    </div> -->
</section>

<section class="blogs-bottom-container">
    <h2 class="transparent-header" style="margin-top: 0; text-align: center;">Blog & News</h2>
    <div class="blogs-description">
        <p class="grey2">
            Learn about the IoT connectivity opportunities and challenges that currently inspire us, test our mettle, and sometimes keep us up at night. This section is about more than what's happening right now. It's also about what we see happening on our industry's horizon.
        </p>
    </div>

    <div class="blogs-page-carousel">
        @foreach ($blogs as $blog)
            @php
                $id = preg_replace('/\s+/', '', $blog->title);
            @endphp
            <div class="blogs-carousel-item" id="{{ $id }}">
                <img src="<?php echo esc_url($blog->image['url']); ?>" class="blog-carousel-image"/>
                <h5 class="blue">{{ $blog->type }}</h5>
                <h5 class="grey2">{{ $blog->title }}</h5>
                <p class="blue">{{ $blog->date }}</p>
            </div>
        @endforeach
    </div>

    <div>
        <div class="blogs-detail-container">
            @foreach ($blogs as $blog)
                @php
                    $id = preg_replace('/\s+/', '', $blog->title) . "-post-detail";
                @endphp
                <div class="blogs-carousel-visibility" id="{{ $id }}">
                    <div style="margin-bottom: 2vh">
                        <h3 style="text-align: center">{{ $blog->title }}</h3>
                    </div>
                    <div>
                        {!! $blog->detail !!}
                    </div>
                    <div style="margin-top: 5vh">
                        <h5 class="blue">BY THIRDWAYV</h5>
                        <p class="blue">Date: {{$blog->date}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>


@endsection