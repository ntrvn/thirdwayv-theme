<?php if( get_field('security-panel-container') ) { ?>
	<?php echo get_field('security-panel-container') . ' security' ; ?>
<?php } ?>


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

            <!-- <div class="row arrows-container">
                <div class="col arrows">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/arrrow-down-group.svg" alt="" />
                </div>
                <div class="col arrows" style="visibility: hidden">
                    <img src="<?php bloginfo('template_url') ?>/assets/images/arrow-up-group.svg" alt="" />
                </div>
            </div> -->
        </section>
        
        <section class="single-products-detail-container">
            <h1 class="transparent-header" style="margin-top: 10vh">{{get_field("title")}}</h1>
            <div class="single-product-description">
                {!! get_field("description") !!}
            </div>

            <div class="single-product-detail row"><!-- {!! get_field("detail") !!} -->
                <!-- <ul class="product-detail-container row"> -->
                    <div class="product-detail-item col-6">
                            <?php
                                $title_1 = get_field('title_1');
                                if( !empty($title_1) ): ?>
                                    <div class="product-detail-item-top">
                                        {!! get_field("title_1") !!}
                                    </div>
                            <?php endif; ?>
                        <div class="product-detail-item-bottom">
                            <?php
                                $content_1 = get_field('content_1');
                                if( !empty($content_1) ): ?>
                                    <div>
                                        {!! get_field("content_1") !!}
                                    </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="product-detail-item col-6">
                            <?php
                                $title_2 = get_field('title_2');
                                if ( !empty($title_2) ): ?>
                                    <div class="product-detail-item-top">
                                        {!! get_field("title_2") !!}
                                    </div>
                            <?php endif; ?>
                        <div class="product-detail-item-bottom">
                            <?php
                                $content_2 = get_field('content_2');
                                if( !empty($content_2) ): ?>    
                                    <div>
                                        {!! get_field("content_2") !!}
                                    </div>
                                <?php endif; ?>
                        </div>
                    </div>

                    <div class="product-detail-item col-6">
                        
                        <?php
                            $title_3 = get_field('title_3');
                            if ( !empty($title_3) ): ?>
                                <div class="product-detail-item-top">
                                    {!! get_field("title_3") !!}
                                </div> 
                        <?php endif; ?> 

                        <div class="product-detail-item-bottom">
                            <?php
                                $content_3 = get_field('content_3');
                                if( !empty($content_3) ): ?>      
                                    <div>
                                        {!! get_field("content_3") !!}
                                    </div>
                            <?php endif; ?> 
                        </div>
                    </div>

                            <div class="product-detail-item col-6">
                                
                                <?php
                                    $title_4 = get_field('title_4');
                                    if( !empty($title_4) ): ?>
                                        <div class="product-detail-item-top">
                                            {!! get_field("title_4") !!}
                                        </div>
                                <?php endif; ?>
                                
                                <?php
                                    $content_4 = get_field('content_4');
                                    if( !empty($content_4) ): ?>
                                        <div class="product-detail-item-bottom">
                                            <div>
                                                    {!! get_field("content_4") !!}
                                            </div>
                                        </div>
                                    <?php endif; ?>
                            </div>


                </div>
            </div>

            <div class="row security-panel-container" style="max-width: 99vw; margin: 0 auto; clear: both;">
                <div class="col product-panel col-active">
                    <a href="/products/appauth/"><h4>AppAuth™</h4></a>
                </div>
                <div class="col product-panel col-disabled">
                    <a href="/products/seamlessconnect/"><h4>SeamlessConnect™</h4></a>
                </div>
                <div class="col product-panel col-disabled">
                    <a href="/products/secureconnectivity/"><h4>SecureConnectivity™</h4></a>
                </div>
                <div class="col product-panel col-disabled">
                    <a href="/products/recordauth/"><h4>RecordAuth™</h4></a>
                </div>
            </div>
        </section>
        <div style="clear: both;"></div>
    </body>
</html>