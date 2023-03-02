const Swiper1 = new Swiper(".swiper3", {
	slidesPerView: 1,
	spaceBetween: 0,
	effect: "fade", //フェードのエフェクト
	loop: true,
	autoplay: {
		delay: 100,
	},
	speed: 4000,
	fadeEffect: {
		crossFade: true
	},
	loop: true,
	pagination: {
		el: ".swiper-pagination"
	},
	// ナビボタンが必要なら追加
	navigation: {
		nextEl: ".swiper-button-next",
		prevEl: ".swiper-button-prev"
	},
	pagination: { //円形のページネーションを有効にする
		el: ".swiper-pagination",
		clickable: true //クリックを有効にする
	}
});