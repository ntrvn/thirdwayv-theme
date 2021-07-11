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
    
        <div class="row arrows-container">
            <div class="col arrows">
                <img src="<?php bloginfo('template_url') ?>/assets/images/arrrow-down-group.svg" alt="" />
            </div>
            <div class="col arrows" style="visibility: hidden">
                <img src="<?php bloginfo('template_url') ?>/assets/images/arrow-up-group.svg" alt="" />
            </div>
        </div>
    </section>

    <section style="max-height: 100vh; text-align: center">
        <h1 class="transparent-header" style="margin-top: 10vh">{{get_field("title")}}</h1>
        <div class="row single-case-detail-container">
            <div class="col-1 single-case-img-container">
                <img src="<?php bloginfo('template_url') ?>/assets/images/caseStudies/left-arrow.svg" alt="" class="cs-img">
            </div>
            <div class="col">
                <div class="single-case-detail">
                    <h5 class="blue">Background</h5>
                    {!! get_field("background") !!}
                </div>
                <div class="single-case-detail">
                    <h5 class="blue">{{get_field("detail-header")}}</h5>
                    {!! get_field("detail") !!}
                </div>
            </div>
            <div class="col-1 single-case-img-container">
                <img src="<?php bloginfo('template_url') ?>/assets/images/caseStudies/right-arrow.svg" alt="" class="cs-img">
            </div>
        </div>
        <div class="row" style="max-width: 99vw; margin: 15vh auto 0 auto;">
            <div class="col company-panels col-active">
                <h4>Healthcare & Consumer Medical Devices</h4>
            </div>
            <div class="col company-panels col-disabled">
                <h4>Connected Car</h4>
            </div>
            <div class="col company-panels col-disabled">
                <h4>Cold Chain Management and Asset Tracking</h4>
            </div>
        </div>
    </section>


  </body>
</html>