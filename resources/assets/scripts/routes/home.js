export default {
  init() {
    // JavaScript to be fired on the home page

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
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
