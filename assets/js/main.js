    var swiper = new Swiper('.desktop_slider', {
        spaceBetween: 30,
        effect: 'fade',
        zoom: false,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false, },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    var swiper2 = new Swiper('.mobile_slider', {
        spaceBetween: 30,
        effect: 'fade',
        zoom: false,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false, },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    $(document).ready(function() {
        jQuery('#myNavbar,#menu-footer').singlePageNav({
            offset: jQuery('#myNavbar').outerHeight() + 15,
            filter: ':not(.external)',
            speed: 1500,
            currentClass: 'current',
            easing: 'easeInOutExpo',
            updateHash: true,
        });

        $(window).scroll(function() {
            ScreenPositionCSS();
        });

        $(window).ready(function() {
            ScreenPositionCSS();
        });

        function ScreenPositionCSS() {
            if ($(window).scrollTop() > 400) {
                $("#navigation").removeClass("animated-header");
                $(".Logo-Navbar").addClass("animated-header");
            } else {
                $("#navigation").addClass("animated-header");
                $(".Logo-Navbar").removeClass("animated-header");
            }
        }
    });
    //Cerrar automátimamente el menu navbar al seleccionar una sección de la página
    $(function() {
        var navMain = $(".navbar-collapse");
        navMain.on("click", "a:not([data-toggle])", null, function() {
            navMain.collapse('hide');
        });
    });