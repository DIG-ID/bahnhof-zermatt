import Swiper from 'swiper/bundle';
// wait until DOM is ready
document.addEventListener("DOMContentLoaded", () => {
	//wait until images, links, fonts, stylesheets, and js is loaded
	window.addEventListener("load", () => {

		if (document.body.classList.contains("single-zimmer")) {
			var ZimmerSwiper = new Swiper(".gallery-swiper", {
				loop: true,
				spaceBetween: 0,
				slidesPerView: 1,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
					type: "fraction",
				},
			});
		}

		if (document.body.classList.contains("single-gemeinschaftsraeume")) {
			var ZimmerSwiper = new Swiper(".gallery-swiper", {
				loop: true,
				spaceBetween: 0,
				slidesPerView: 1,
				navigation: {
					nextEl: ".swiper-button-next",
					prevEl: ".swiper-button-prev",
				},
				pagination: {
					el: ".swiper-pagination",
					type: "fraction",
				},
			});
		}


	}, false);
});