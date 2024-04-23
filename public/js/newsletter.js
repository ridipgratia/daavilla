import AllMethod from "./AllMethod.js";
const all_method = new AllMethod();
$(document).ready(function () {
    $('.newsletter-btn').on('click', function () {
        $('.newsletter-form-div').addClass('newsletter-show');
        $('.newsletter-btn').attr('style', 'display:none !important')
    });
    $('.newsletter-close').on('click', function () {
        $('.newsletter-form-div').removeClass('newsletter-show');
        $('.newsletter-btn').attr('style', 'display:block !important')
    })
});