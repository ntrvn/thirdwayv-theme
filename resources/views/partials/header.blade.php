<nav class="navbar navbar-expand-lg">
  @php
      $classArray = [
        'home' => ($_SERVER['REQUEST_URI'] === '/' ? 'nav-item active' : 'nav-item'),
        'whyThirdwayv' => 'nav-item',
        'company' => 'nav-item',
        'caseStudies' => (strpos($_SERVER['REQUEST_URI'], 'case-studies') !== false ? 'nav-item active' : 'nav-item'),
        'products' => (strpos($_SERVER['REQUEST_URI'], 'products') !== false ? 'nav-item active' : 'nav-item'),
        'security' => (strpos($_SERVER['REQUEST_URI'], 'security') !== false ? 'nav-item active' : 'nav-item'),
        'blogs' => (strpos($_SERVER['REQUEST_URI'], 'blogs') !== false ? 'nav-item active' : 'nav-item'),
        'letsTalk' => 'nav-item',
        'careers' => (strpos($_SERVER['REQUEST_URI'], 'careers') !== false ? 'nav-item active' : 'nav-item')
      ]
  @endphp
  <a class="navbar-brand" href="/">
    <img src="<?php bloginfo('template_url') ?>/assets/images/logo.png" style="color: black;"/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="bi bi-list"></i>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="<?php echo $classArray['home'] ?>">
        <a class="nav-link" href="/">Home</a>
      </li>
      <li class="<?php echo $classArray['whyThirdwayv'] ?>">
        <a class="nav-link" data-scroll href="/#why-thirwayv-screen">Why Thirdwayv?</a>
      </li>
      <li class="<?php echo $classArray['company'] ?>">
        <a class="nav-link" data-scroll href="/#company-screen">Company</a>
      </li>
      <li class="<?php echo $classArray['caseStudies'] ?>">
        <a class="nav-link" data-scroll href="/#case-studies-screen">Case Studies</a>
      </li>
      <li class="<?php echo $classArray['products'] ?>">
        <a class="nav-link" data-scroll href="/#products-screen">Products</a>
      </li>
      <li class="<?php echo $classArray['security'] ?>">
        <a class="nav-link" data-scroll href="/#security-screen">Security</a>
      </li>
      <li class="<?php echo $classArray['blogs'] ?>">
        <a class="nav-link" data-scroll href="/#blogs-screen">Blogs/News</a>
      </li>
      <li class="<?php echo $classArray['letsTalk'] ?>">
        <a class="nav-link" data-scroll href="/#contact">Let's talk</a>
      </li>
      <li class="<?php echo $classArray['careers'] ?>">
        <a class="nav-link" data-scroll href="/careers">Careers</a>
      </li>
    </ul>
  </div>
</nav>
