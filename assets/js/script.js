$('.tooltip-box').click(function (e) {
    $(this).addClass('copied');
    setTimeout(function () {
        $('.tooltip-box').removeClass('copied');
    }, 2000);

    const $tmp = $("<textarea>");
    $("body").append($tmp);
    $tmp.val($('.promo').text()).select();
    document.execCommand("copy");
    $tmp.remove();
})

$(window).resize(function () {

    if ($(this).width() > 1024) {
        let width = $(this).width();
        let zoom = width / 1920;
        $('.wrapper').css('zoom', zoom);
        $('.wrapper').css('-moz-transform', 'scale('+zoom+')');

    } else {
        let width = $(this).width();
        let zoom = width / 320;
        $('.wrapper').css('zoom', zoom);
    }
});

$(window).resize();




