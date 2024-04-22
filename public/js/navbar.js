$(document).ready(function () {
    $('.nav-btn').on('click', function () {
        // $('.').addClass('nav-display');
        if ($('.navbar-link-div').css("display") === "flex") {
            $('.navbar-link-div').attr('style', 'display:none !important')
        } else {
            $('.navbar-link-div').attr('style', 'display:flex !important')
        }
    });
});