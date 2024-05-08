import BookModule from "./BookModule.js";
const book_module = new BookModule();
$(document).on("click", "#open-check-btn", function () {
    $("#date_input").trigger("click");
});
