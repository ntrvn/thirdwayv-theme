import SmoothScroll from 'smooth-scroll';

export default {
  init() {
    // JavaScript to be fired on the home page
    var scroll = new SmoothScroll('a[href*="#"]', {
      speed: 500,
      speedAsDuration: true,
    });
    console.log(scroll)

    // adding onclick event for whythirdwayv screen
    $('.card-img-top').on('click', function() {
      // removing border and text for previous active card
      $('.card-list-items.card-active').removeClass('card-active').addClass('card-disabled');
      
      // showing current active card
      const parent = $(this).parent();
      if (parent.hasClass('card-disabled')) {
        parent.removeClass('card-disabled');
        parent.addClass('card-active');
      }
    })

    // adding onclick event for company screen
    $('.company-panels-header').on('click', function() {
      // removing border and text for previous active card
      $('.col.company-panels.col-active').removeClass('col-active').addClass('col-disabled');
      
      // showing current active card
      const parent = $(this).parent();
      if (parent.hasClass('col-disabled')) {
        parent.removeClass('col-disabled');
        parent.addClass('col-active');
      }
    })


    // adding onclick event for leaders
    $('.leaders-btn').on('click', function() {
      $('.leaders-active').removeClass('leaders-active').addClass('leaders-disabled');
      // showing current active card
      const parent = $(this).parent().parent().parent();
      if (parent.hasClass('leaders-disabled')) {
        parent.removeClass('leaders-disabled');
        parent.addClass('leaders-active');
      }
    })

    $('#Group_19075').on('click', function() {
      window.location.href = '/products/appauth';
    })

    $('#Group_19077').on('click', function() {
      window.location.href = '/products/secureconnectivity';
    })
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
