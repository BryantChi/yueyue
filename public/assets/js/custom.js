$(function () {
    $(".site-blocks-cover").css(
        "margin-top",
        $(".site-navbar").height() + "px"
    );

    $(window).on("resize", function () {
        if ($(window).width() < 768) {
            $(".site-blocks-cover").css(
                "margin-top",
                $(".site-navbar").height() + "px"
            );
        }
    });

    $(".site-menu a").on("click", function () {
        // 點擊後關閉側邊欄
        // $('body').click();

        // 獲取點擊事件的父元素的a tag的href屬性的值
        var href = $(this).attr("href");

        // 依href屬性的值滾動到該區域
        $("html, body").animate(
            {
                scrollTop:
                    $(href).offset().top - $(".site-navbar").height() * 2, // 20 是額外的間距
                //  - $('.site-navbar').height()
            },
            1000
        ); // 1000 毫秒（1 秒）滾動到該區域
    });

    $(".site-mobile-menu-body a").on("click", function () {
        // 點擊後關閉側邊欄
        $(".icon-close2")[0].click();

        // 獲取點擊事件的父元素的a tag的href屬性的值
        var href = $(this).attr("href");

        // 依href屬性的值滾動到該區域
        $("html, body").animate(
            {
                scrollTop:
                    $(href).offset().top - $(".site-navbar").height() * 2, // 20 是額外的間距
                //  - $('.site-navbar').height()
            },
            1000
        ); // 1000 毫秒（1 秒）滾動到該區域
    });

    var swiper = new Swiper(".heroSwiper", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        centeredSlides: true,
        speed: 1000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev",
        // },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        // },
    });

    $.each($(".faq-item-box"), function (i, v) {
        $(this)
            .find(".faq-item-q")
            .on("click", function () {
                // 關閉所有其他的 .faq-item-a 和重設箭頭狀態
                $(".faq-item-box")
                    .not($(this).parent())
                    .find(".faq-item-a")
                    .slideUp();
                $(".faq-item-box")
                    .not($(this).parent())
                    .find(".faq-item-arrow-p")
                    .removeClass("d-none");
                $(".faq-item-box")
                    .not($(this).parent())
                    .find(".faq-item-arrow-d")
                    .addClass("d-none");

                // 切換當前項目的狀態
                $(this).parent().find(".faq-item-a").slideToggle();
                $(this).find(".faq-item-arrow-p").toggleClass("d-none");
                $(this).find(".faq-item-arrow-d").toggleClass("d-none");
            });
    });

    $("[data-fancybox]").fancybox({
        // toolbar: false,
        // smallBtn: true,
        loop: true,
        buttons: [
            "slideShow",
            "fullScreen",
            // 'thumbs',
            // 'share',
            //'download',
            "zoom",
            "close",
        ],
    });

    $(".slick").slick({
        arrows: false,
        dots: true,
        speed: 300,
        autoplay: true,
        draggable: true,
        centerPadding: "100px",
        autoplaySpeed: 2000,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                },
            },
        ],
    });
    $(".about-slick").slick({
        arrows: false,
        dots: false,
        speed: 300,
        autoplay: true,
        centerPadding: "100px",
        autoplaySpeed: 2000,
        slidesToShow: 1,
        slidesToScroll: 1,
        draggable: true,
    });
});
