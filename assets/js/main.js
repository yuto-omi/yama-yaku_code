//to-topの処理
$(window).scroll(function () {
    var height = $(window).height();
    if ($(window).scrollTop() > height) {
        $('.page-top').addClass('is-active');
    } else {
        $('.page-top').removeClass('is-active');
    }
});
