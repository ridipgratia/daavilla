var bookingBtn = document.getElementById('booking');
var hideFormBtn = document.getElementById('hide-form');
var mainForm = document.getElementById('main-form');

bookingBtn.addEventListener("click", function () {
    console.log("Btn clicked");
    mainForm.classList.remove('d-none');
    bookingBtn.style.display = "none";
});
hideFormBtn.addEventListener("click", function () {
    mainForm.classList.add('d-none');
    bookingBtn.style.display = "block";

});