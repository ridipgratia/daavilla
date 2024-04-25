import MyModule from "./MyModule.js";
const my_module = new MyModule();
$(document).ready(function () {
    $(document).on('submit', '#contact-form', function (e) {
        e.preventDefault();
        my_module.contactFormSubmit();
    })
});