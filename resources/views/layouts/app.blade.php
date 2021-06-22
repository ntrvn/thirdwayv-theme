<!doctype html>
<html>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    

    @include('partials.home.intro')
    @include('partials.home.whyThirdwayv')
    @include('partials.home.company')
    @include('partials.home.leaders')

    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
