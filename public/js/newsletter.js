import MyModule from "./MyModule.js";
const my_module = new MyModule();
$(document).ready(function () {
    $('.newsletter-btn').on('click', function () {
        $('.newsletter-form-div').addClass('newsletter-show');
        $('.newsletter-btn').attr('style', 'display:none !important')
    });
    $('.newsletter-close').on('click', function () {
        $('.newsletter-form-div').removeClass('newsletter-show');
        $('.newsletter-btn').attr('style', 'display:block !important')
    });
    // ------------------ submit newsletter data ----------------
    $(document).on('click', '#newsletter-btn', function () {
        my_module.submitNewsletter();
    })
});