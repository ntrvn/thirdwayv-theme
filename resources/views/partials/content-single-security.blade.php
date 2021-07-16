<!doctype html>
<html {!! get_language_attributes() !!}>
  <body @php body_class() @endphp>
    <section class="single-case-studies-container" style="background: url(<?php bloginfo('template_url') ?>/assets/images/security-cover-img.svg);">
        <h2 class="single-case-header">The key elements of IoT protection</h2>

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

    <section class="security-second-page">
        <h2 class="transparent-header" style="margin-top: 10vh">{{get_field("order")}}</h2>
        <h2 class="transparent-header" style="margin-top: 0">{{get_field("title")}}</h2>
        
        <div class="single-security-description">
            {!! get_field("description") !!}
        </div>

        @php
            $class = "";
            if (get_field("order") > 1) {
                $class = "security-simple-detail";
            }
        @endphp

        <div class="single-security-detail {{$class}}">
            {!! get_field("detail") !!}
        </div>

        <div class="row security-panel-container">
            <div class="col product-panel col-active">
                <h4>01&emsp;&emsp; The Chain of Trust</h4>
            </div>
            <div class="col product-panel col-disabled">
                <h4>02&emsp;&emsp; Trust at the loT Edge</h4>
            </div>
            <div class="col product-panel col-disabled">
                <h4>03&emsp;&emsp; Cloud Protection</h4>
            </div>
        </div>

    </section>

  </body>
</html>