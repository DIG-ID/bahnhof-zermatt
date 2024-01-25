// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

    var isFadedIn = false;

    $('.fixed-book-button').on( 'click', () => {
      if (isFadedIn) {
        $('.fixed-booking-container').fadeOut();
      } else {
        $('.fixed-booking-container').fadeIn();
      }
      isFadedIn = !isFadedIn;
    });

    $('.closeButton').on( 'click', () => {
      $('.fixed-booking-container').fadeOut();
      isFadedIn = false;
    });

    if (document.body.classList.contains("post-type-archive-zimmer") || document.body.classList.contains("post-type-archive-gemeinschaftsraeume")) {
      $('.info-button').on( 'click', function () {
        $('.info-content').slideToggle();
        $(this).toggleClass('closed opened');
      });
    }
 
  }, false);
});
