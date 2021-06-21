<!doctype html>
<html>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="first-page">
      <div class="card transparent-card" id="firstpage-card">
        <div class="card-body">
          <hr class="bar-top-hr"/>
          <h3 class="card-title blue" style="color:black">Connected. Protective</h5>
          <p class="card-text grey2" style="color:black">
            Thirdwayv helps your enterprise realize the full potential 
            of lOT connectivity. All while neutralizingsecurity threats 
            that can run ruin the customer experience and your 
            reputation.
          </p>
        </div>
      </div>

      <div class="follow-container">
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
        <div class="col arrows">
          <img src="<?php bloginfo('template_url') ?>/assets/images/arrow-up-group.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="second-page">
      <h1 class="transparent-header">Why Thirdwayv?</h1>
      <div class="card transparent-card card-centered">
        <div class="card-body">
          <!-- @foreach ($get_intro as $key=>$post)
            <h3 class="card-title blue">{{$post->title}}</h3>
            <p class="card-text grey5">{{html_entity_decode($post->excerpt)}} </p>
          @endforeach         -->
          <h3 class="card-title blue">Becausewhen lives are on the line, we deliver.</h3>
          <p class="card-text grey5">Thirdwayv  enables  some  of  the  world's  most  demanding  and  safety-critical  loT  services.  Services where a patient's very well-being hinges upon our "getting it right". Time and again we've proven we can. And we bring those same assurances to other applications and markets that need secure and reliable operation.  </p>
        </div>
      </div>

      <h6 class="grey2 margin-header">HERE IS HOW WE DO IT</h6>

      <div class="row" id="card-list-items-container">
        <div class="col">
          <div class="card card-list-items" style="width: 20rem;">
            <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/first.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="card-icon-container">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/first.svg" class="card-list-items-icon">
              </div>
              <p class="card-text">End-to-end loT security, from the hardware up</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-list-items" style="width: 20rem;">
            <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/second.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="card-icon-container">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/second.svg" class="card-list-items-icon">
              </div>
              <p class="card-text">End-to-end loT security, from the hardware up</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-list-items" style="width: 20rem;">
            <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/third.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="card-icon-container">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/third.svg" class="card-list-items-icon">
              </div>
              <p class="card-text">End-to-end loT security, from the hardware up</p>
              <!-- <hr class="card-list-items-hr"/> -->
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card card-list-items" style="width: 20rem;">
            <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/bw/last.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="card-icon-container">
                <img src="<?php bloginfo('template_url') ?>/assets/images/whyThirdwayv/last.svg" class="card-list-items-icon">
              </div>
              <p class="card-text">End-to-end loT security, from the hardware up</p>
            </div>
          </div>          
        </div>
      </div>
      
      <div class="third-page">
        <div class="thir-page-inner-container">
          <h1 class="transparent-header">Company</h1>
          <div class="card transparent-card card-centered">
            <div class="card-body">
              <h3 class="card-title blue">We're invested in technology. And also in you.</h3>
              <p class="card-text grey5">We've built our business on trust. Not only when it comes to loT connectivity and security, but also when it comes to relationships. Because who you can trust is as important as anything else. Perhaps even more so.</p>
            </div>
          </div>

          <div>
            <img src="<?php bloginfo('template_url') ?>/assets/images/thirdPage/third-page-icon-first.svg" alt="">
            <div class="card transparent-card card-centered card-large">
              <div class="card-body">
                <h3 class="card-title blue">Our Missionis simple</h3>
                <p class="card-text grey5">We live in exciting times, filled with never-before-seen opportunity.But inextricably linked with thetechnological potential are threatsthat can be even greater in scope. Threats that can destroy the verything that's central to any brand –its reputation.</p>
                <p class="card-text grey5">Our mission at Thirdwayv is straightforward: we want to help take the anxiety out of the IoT.</p>
                <p class="card-text grey5">We   want   to   help   your   enterprise   move   safely   beyond   place-to-place   andperson-to-person communications  to  a  new  wave  of  thing-to-thingnetworks.  A  third  wave,  if  you  will.  One  without worries. One wherewe've secured every element of the system and all of the devicesconnected to it.  Our goal is an IoT you can trust, for safety-criticalapplications and services that depend on it.</p>
              </div>
            </div>
          </div>

          <div>
            <img src="<?php bloginfo('template_url') ?>/assets/images/thirdPage/third-page-icon-second.svg" alt="">
            <div class="card transparent-card card-centered card-large">
              <div class="card-body">
                <h3 class="card-title blue">OUR VALUES ARE WHAT GROUND US</h3>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col third-page-no-padding">
              <h1>CONNECTION</h1>
            </div>
            <div class="col third-page-no-padding">
              <h1>INTEGRITY</h1>
            </div>
            <div class="col third-page-no-padding">
              <h1>COLLABORATION</h1>
            </div>
          </div>
        </div>
        
      </div>

    </div>

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
