$(document).ready(function() {
	$("#slider").responsiveSlides({
		auto: true,
		nav: true,
		speed: 500,
		namespace: "slides",
		pager: false
	});
	
    $(".menu").menu();
}); 

$.fn.menu = function(e) {
    function r() {
        $(".menu").find("li, a").unbind();
        if (window.innerWidth <= 768) {
            o();
            s();
            if (n == 0) {
                $(".menu > li:not(.showhide)").hide(0)
            }
        } else {
            u();
            i()
        }
    }

    function i() {
        $(".menu li").bind("mouseover", function() {
            $(this).children(".dropdown, .menu-panel").stop().fadeIn(t.interval)
        }).bind("mouseleave", function() {
            $(this).children(".dropdown, .menu-panel").stop().fadeOut(t.interval)
        })
    }

    function s() {
        $(".menu > li > a").bind("click", function(e) {
            if ($(this).siblings(".dropdown, .menu-panel").css("display") == "none") {
                $(this).siblings(".dropdown, .menu-panel").slideDown(t.interval);
                $(this).siblings(".dropdown").find("ul").slideDown(t.interval);
                n = 1
            } else {
                $(this).siblings(".dropdown, .menu-panel").slideUp(t.interval)
            }
        })
    }

    function o() {
        $(".menu > li.showhide").show(0);
        $(".menu > li.showhide").bind("click", function() {
            if ($(".menu > li").is(":hidden")) {
                $(".menu > li").slideDown(300)
            } else {
                $(".menu > li:not(.showhide)").slideUp(300);
                $(".menu > li.showhide").show(0)
            }
        })
    }

    function u() {
        $(".menu > li").show(0);
        $(".menu > li.showhide").hide(0)
    }
    var t = {
        interval: 250
    };
    var n = 0;
    $(".menu").prepend("<li class='showhide'><span class='title'>MENU</span><span class='icon1'></span><span class='icon2'></span></li>");
    r();
    $(window).resize(function() {
        r()
    })
}