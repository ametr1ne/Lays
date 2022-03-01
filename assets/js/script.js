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
});

$(window).resize(function () {

    let userAgent = navigator.userAgent.toLowerCase();
    let Mozila = /firefox/.test(userAgent);

    if ($(this).width() > 1024) {
        let width = $(this).width();
        let zoom = width / 1920;
        $('html').css({
            'zoom': zoom,
            'height': 'calc(100% / ' + zoom + ')',
            '-moz-transform': 'scale(' + zoom + ')',
            '-moz-transform-origin': 'left top'
        });
        if (Mozila) {
            $('html').css('width', 'calc(100% / ' + zoom + ')');
        }
    } else {
        let width = $(this).width();
        let zoom = width / 320;
        $('html').css({
            'zoom': zoom,
            'height': 'calc(100% / ' + zoom + ')',
            '-moz-transform': 'scale(' + zoom + ')',
            '-moz-transform-origin': 'left top'
        });
        if (Mozila) {
            $('html').css('width', 'calc(100% / ' + zoom + ')');
        }
    }
});

$(window).resize();




