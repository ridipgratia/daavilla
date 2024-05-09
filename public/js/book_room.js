import BookModule from "./BookModule.js";
const book_module = new BookModule();
book_module.fun();
$(document).on("click", "#open-check-btn", function () {
    $("#date_input").trigger("click");
});

// ------------------ open add room dislog -------------------
$(document).on('click', '#open-room-dialog', function () {
    $('.room-person-count-div').toggleClass('active-room-person-count-div');
});
// ------------- add new room---------------
$(document).on('click', '#add-new-room', function () {
    book_module.addNewRoom();
});