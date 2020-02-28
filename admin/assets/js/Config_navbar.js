$(document).ready(function() {
    $(".dropdown").hover(
        function() {
            //$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("100");
            $(this).toggleClass('open');
        },
        function() {
            //$('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("100");
            $(this).toggleClass('open');
        }
    );
});