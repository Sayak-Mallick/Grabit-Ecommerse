var swiper = new Swiper(".mySwiper", {
		effect: "coverflow",
		grabCursor: true,
		centeredSlides: true,
		slidesPerView: "auto",
		coverflowEffect: {
			rotate: 50,
			stretch: 0,
			depth: 100,
			modifier: 1,
			slideShadows: true,
		},
		pagination: {
			el: ".swiper-pagination",
		},
		autoplay: 
		{
			delay: 2500,
		},
		loop: true,
	});


		var swiper = new Swiper(".sponsore-Swiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        autoplay: 
		{
			delay: 1500,
		},
		loop: true,
      });