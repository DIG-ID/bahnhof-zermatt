// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
  //wait until images, links, fonts, stylesheets, and js is loaded
  window.addEventListener("load", () => {

    /* Make header sticky on*/
    let header = $('#header-main');
    let lastScroll = 0; 
  
    $(window).on( 'scroll', function() {
      const currentScroll = window.pageYOffset;
      if ( currentScroll <= 0 ) {
        //console.log('current scroll is ' + currentScroll);
        header.removeClass( 'sticky' );
        return;
      } 
      if ( currentScroll > lastScroll && currentScroll > 0 && ! header.hasClass('sticky') ) {
        //down
        header.removeClass( 'sticky' );
        header.addClass( 'sticky' );
      } 
      lastScroll = currentScroll;
    });




    /* Hamburguer toogle */ 
    const $toggleBtn = $('.mobile-menu-toggle')

    $toggleBtn.on('click', (e) => {
      $('#header-main').toggleClass('mobile-menu-open');
      //$('body').toggleClass('mega-menu-open');
      $('.mobile-menu-wrapper').slideToggle(300);
    });
  

  }, false);
});