<!doctype html>
<html {!! get_language_attributes() !!}>
    <body @php body_class() @endphp>
        <section class="single-products-container" style="background: url(<?php bloginfo('template_url') ?>/assets/images/products/product-cover-image.svg);">

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
        
        <section 
            class="single-products-detail-container" 
            style="
                background: url(<?php bloginfo('template_url') ?>/assets/images/products/{{get_field("background")}}.svg);
                background-repeat: no-repeat;
                background-size: 80vh;
                background-position-x: center;
                background-position-y: 20vh;"
        >
            <h1 class="transparent-header" style="margin-top: 10vh">{{get_field("title")}}</h1>
            <div class="single-product-description">
                {!! get_field("description") !!}
            </div>

            <div class="single-product-detail">
                {!! get_field("detail") !!}
            </div>

            <div class="row security-panel-container" style="max-width: 99vw; margin: 15vh auto 0 auto;">
                <div class="col product-panel col-active">
                    <h4>AppAuth™</h4>
                </div>
                <div class="col product-panel col-disabled">
                    <h4>SeamlessConnect™</h4>
                </div>
                <div class="col product-panel col-disabled">
                    <h4>SecureConnectivity™</h4>
                </div>
                <div class="col product-panel col-disabled">
                    <h4>RecordAuth™</h4>
                </div>
            </div>
        </section>
    </body>
</html>