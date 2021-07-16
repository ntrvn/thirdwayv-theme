<section class="wrapper" id="security-screen">
    <section class="">
        {!! get_field("security_title_and_description") !!}
    </section>
    
    <section class="safeguard-svg">
        @include('partials.home.securityOverview')
    </section>

    <div class="card card-centered ">
        <div class="card-body safeguard-mobile-container">
            {!! get_field("security_man_title_and_text") !!}
        </div>
    </div>

    <!-- TODO: problematic hardcoding of width -->
    <section class="safeguard-bottom-text">
        <p class="card-text grey2">We include all necessary components for communications and control between smartphones and the cloud, and to and from IoT devices. Other key elements include.</p>
    </section>

    <section style="margin-top: 3vh; margin-bottom: 10vh">
        <div class="row" style="max-width: 99vw; margin: 0 auto;">
            <div class="col security-panels">
                <h5>Smartphone operating system security that extends across the app and platform.</h5>
            </div>
            <div class="col security-panels">
                <h5>IoT device security and key management.</h5>
            </div>
            <div class="col security-panels">
                <h5>Over-the-air upgrades for IoT devices.</h5>
            </div>
        </div>
    </section>

    <section>
        <h5 class="line-through-text"><span>The key elements of IoT protection – and how we address them</span></h5>
        <h5 class="mobile-iot">The key elements of IoT protection – and how we address them</h5>
    </section>

    <section>
        <div class="row three-circles" >
            {!! get_field("iot_circles") !!}
        </div>
    </section>
</section>