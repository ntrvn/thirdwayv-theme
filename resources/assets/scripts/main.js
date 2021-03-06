// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import 'slick-carousel';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

var $slickFrame = $('.tab-slider-thumbs__list');

var slideWidth = $slickFrame.width() / 3;
var centerPadding = (slideWidth / 4) * 3;

$(document).ready(function(){
  let searchParams = new URLSearchParams(window.location.search);
  $('.blogs-page-carousel').slick({
    centerMode: true,
    centerPadding: centerPadding + 'px',
    dots: true,
    slidesToShow: 3,
    arrows: true,
    initialSlide: searchParams.get('post-id') === null ? 0 : parseInt(searchParams.get('post-id'), 10),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
        },
      },
    ],
  });
});

const showPost = () => {
  var activeId = document.getElementsByClassName('slick-slide slick-current slick-active slick-center')[0].children[0].children[0].id + '-post-detail';
  const allElements = document.getElementsByClassName('blogs-detail-container')[0].children;
  for (var i = 0; i < allElements.length; i++) {
    var curr = document.getElementById(allElements[i].id);
    if (allElements[i].id === activeId) {
      curr.style.display = 'block';
    } else {
      curr.style.display = 'none';
    }
  }
}

window.onload = () => {
  if (window.location.pathname === '/blogs/') {
    showPost();
    const button = document.getElementsByClassName('slick-arrow');
    for (var i = 0; i < button.length; i++) {
      button[i].onclick = (event) => {
        console.log(event)
        showPost();
      }
    }
  }

}
