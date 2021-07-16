<section class="wrapper" id="products-screen">
    <section class="">
        {!! get_field("products_title_and_description_and_box") !!}
    </section>

    <section class="products-svg-container">
        @include('partials.home.products-imgages')
    </section>

    <div class="mobile-products-container">
        {!! get_field("product_overview_content") !!}
    </div>

</section>