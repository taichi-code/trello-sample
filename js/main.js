$(function () {

    //ハンバーガーメニュー
    var btnMenu = $('.btn-menu');
    var globalNav = $('.global-nav');

    btnMenu.on('click', function () {
        btnMenu.toggleClass('active');
        globalNav.toggleClass('show');
    });

    //ヘッダースクロール
    $(window).scroll(function () {
        if ($(this).scrollTop() > 0) {
            $('.header').addClass('active');
        } else {
            $('.header').removeClass('active');
        }
    });

    // ページトップ
    var $pageTop = $('.page-top');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $pageTop.fadeIn();
        } else {
            $pageTop.fadeOut();
        }
    });
    $pageTop.on('click', function () {
        $('body,html').animate({
            scrollTop: 0
        }, 300);
        return false;
    });

});

$(function () {
    $('#open-form').button();
    $('#open-form').click(function () {
        $('#show-form').toggle('blind', '', 100);
    });
});

$(function () {
    $("#board").sortable();
});