<!doctype html>
<html {!! get_language_attributes() !!}>
  <body @php body_class() @endphp>

    <section class="single-case-studies-container" style="background: url(<?php bloginfo('template_url') ?>/assets/images/caseStudies/{{get_field("image_name")}}.svg);">
    
    <h2 class="single-case-header">{{get_field("category_name")}}</h2>

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

    <section style="min-height: 100vh; text-align: center">
        <h1 class="blog-page-h1 transparent-header">{{get_field("title")}}</h1>
        <div class="row single-case-detail-container">
            @php
                $post_id = $post->ID; // current post ID
                $cat = get_the_category(); 
                $current_cat_id = $cat[0]->cat_ID; // current category ID 
                $curr_cat_name = get_cat_name( $current_cat_id );

                $args = array( 
                    'post_type' => 'case-studies',
                    'category' => $current_cat_id,
                );
                $posts = get_posts( $args );
                // get IDs of posts retrieved from get_posts
                $ids = array();
                foreach ( $posts as $thepost ) {
                    $ids[] = $thepost->ID;
                }
                // get and echo previous and next post in the same category
                $thisindex = array_search( $post_id, $ids );
                $previd    = isset( $ids[ $thisindex - 1 ] ) ? $ids[ $thisindex - 1 ] : false;
                $nextid    = isset( $ids[ $thisindex + 1 ] ) ? $ids[ $thisindex + 1 ] : false;
                $showNext = "visible";
                $showPrev = "visible";
                if (str_contains(get_permalink($nextid), $_SERVER['REQUEST_URI'])) {
                    $showNext = "hidden";
                }
                if (str_contains(get_permalink($previd), $_SERVER['REQUEST_URI'])) {
                    $showPrev = "hidden";
                }
            @endphp


                <!-- <div class="col"> -->
                    <div class="single-case-detail">
                        <h5 class="blue">Background</h5>
                        {!! get_field("background") !!}
                    </div>
                    <div class="single-case-detail">
                        <h5 class="blue">{{get_field("detail-header")}}</h5>
                        {!! get_field("detail") !!}
                    </div>
                <!-- </div> -->

                <div style="clear: both;"></div>
                
                <div class="full-width">
                    <div class="single-case-img-container">
                        <a href="<?php echo get_permalink($previd) ?>" style="visibility: <?php echo $showPrev ?>">
                            <img class="blog-arrows" src="<?php bloginfo('template_url') ?>/assets/images/caseStudies/left-arrow.svg" alt="" class="cs-img">
                        </a>
                    </div>
                    <div class="single-case-img-container">
                        <a href="<?php echo get_permalink($nextid) ?>" style="visibility: <?php echo $showNext ?>">
                            <img class="blog-arrows" src="<?php bloginfo('template_url') ?>/assets/images/caseStudies/right-arrow.svg" alt="" class="cs-img">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row " style="max-width: 99vw; margin: 15vh auto 0 auto;">
            @php
                $leftColor = 'grey2';
                $middleColor = 'grey2';
                $rightColor = 'grey2';
                if ($curr_cat_name == 'consumer medical devices') {
                    $leftColor = 'blue';
                } else if ($curr_cat_name == 'connected car') {
                    $middleColor = 'blue';
                } else {
                    $rightColor = 'blue';
                }
            @endphp


            <div class="col company-panels col-active">
                <a href="/case-studies/connected-home-healthcare"><h4 class="<?php echo $leftColor ?>">Healthcare & Consumer Medical Devices</h4></a>
            </div>
            <div class="col company-panels col-disabled">
                <a href="/case-studies/firmware-upgrades"><h4 class="<?php echo $middleColor ?>">Connected Car</h4></a>
            </div>
            <div class="col company-panels col-disabled">
                <a href="/case-studies/cold-chain-management-and-asset-tracking"><h4 class="<?php echo $rightColor ?>">Cold Chain Management and Asset Tracking</h4></a>
            </div>
        </div>
    </section>


  </body>
</html>