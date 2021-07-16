<section class="wrapper" id="blogs-screen">
    <section class="">
        {!! get_field("blog_and_news_title") !!}
    </section>

    <section class="blogs-carousel">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col carousel-arrows">
                                <a class="" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </div>
                            <div class="col-md-3 carousel-item-left">
                                <div>
                                    <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/first.png" alt="" class="">
                                    <h5>BLOG POST</h5>
                                    <p class="grey5">Latest Media Coverage</p>
                                    <p class="grey5">September, 2020</p>
                                </div>
                            </div>
                            <div class="col-md-4 carousel-item-middle">
                                <div>
                                    <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/second.png" alt="" class="d-block w-100">
                                    <h5 class="blue">PRESS RELEASE</h5>
                                    <p class="grey5">Thirdwayv’s SeamlessConnect™ Solution Ensures High-Reliability Cloud Communication for Mission-Critical IoT System Devices</p>
                                    <p class="grey5">September, 2020</p>
                                </div>
                            </div>
                            <div class="col-md-3 carousel-item-right">
                                <div>
                                    <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/third.png" alt="" class="">
                                    <h5>BLOG POST</h5>
                                    <p class="grey5">Thirdwayv Featured in Medtech Intelligence</p>
                                    <p class="grey5">September, 2020</p>
                                </div>                                
                            </div>
                            <div class="col carousel-arrows">
                                <a class="" href="#carouselExampleCaptions" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 carousel-item-left">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/first.png" alt="" class="d-block w-100">
                                <div>
                                    <h5>BLOG POST</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 carousel-item-middle">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/second.png" alt="" class="d-block w-100">
                                <div>
                                    <h5>BLOG POST</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-4 carousel-item-right">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/third.png" alt="" class="d-block w-100">
                                <div>
                                    <h5>BLOG POST</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-4 carousel-item-left">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/first.png" alt="" class="d-block w-100">
                                <div>
                                    <h5>BLOG POST</h5>
                                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>
                            <div class="col-md-4 carousel-item-middle">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/second.png" alt="" class="d-block w-100">
                                <div>
                                    <h5>BLOG POST</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                            <div class="col-md-4 carousel-item-right">
                                <img src="<?php bloginfo('template_url') ?>/assets/images/blogs/third.png" alt="" class="d-block w-100">
                                <div>
                                    <h5>BLOG POST</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators-container">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </div>        
    </section>
</section>