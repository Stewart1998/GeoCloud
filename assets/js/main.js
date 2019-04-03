    function showSubMenu(id) {
        if ($("#" + id).hasClass("show")) {
            $("#" + id).removeClass("show");
        } else {
            $("#" + id).addClass("show");
        }
    }
    function displaySubMenu(id) {
        if ($("#" + id).css('display') == 'none') {
            $(".sub_menu").css("display", "none");
            $("#" + id).css("display", "block");
        } else {
            $("#" + id).css("display", "none");
        }
    }
    $("main").click(function () {
        $(".sub_menu").css("display", "none");
    })
    function safeNavigate(url) {
        location.href = url;
    }
    function showMobileNav() {
        if ($(".mobile-nav").hasClass("show")) {
            $(".mobile-nav").removeClass("show");
            $(".nav-item").removeClass("show")
        } else {
            $(".mobile-nav").addClass("show");
            setTimeout(function () { $(".nav-item").addClass("show") }, 3000);
        }
    }
    $(window).scroll(function () {
        if ($(document).scrollTop() > 5) {
            $("nav").addClass("scroll");
            $("aside").addClass("scroll");
            $(".weather-header").addClass("scroll");
        } else if ($(document).scrollTop() < 5) {
            $("nav").removeClass("scroll");
            $("aside").removeClass("scroll");
            $(".weather-header").removeClass("scroll");

        }
    });