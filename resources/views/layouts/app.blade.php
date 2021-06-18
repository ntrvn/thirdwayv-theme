<!doctype html>
<html>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')

    <div class="first-page">
      <div class="card transparent-card" id="firstpage-card">
        <div class="card-body">
          <hr />
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
      @foreach ($get_intro as $key=>$post)
        <h1 class="transparent-header">{{$post->title}}</h1>
          <p> {{html_entity_decode($post->excerpt)}} </p>
      @endforeach
    </div>

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
