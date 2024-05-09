class BookModule {
    constructor() {
        this.start_date = "";
        this.end_date = "";
        this.name = "ridip";
        this.ids = [];
        this.ids['name'] = 1;
        this.ids['name_1'] = 1;
        this.room = {

        }
        this.pre_data = {

        }
        this.pre_data['adult'] = 1;
        this.pre_data['child'] = 2;
        this.room[this.name] = this.pre_data;
        delete this.ids['name'];
        console.log(this.ids);
    }
}
$(function () {
    $("#open-check-btn").daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: "Clear",
        },
        // parentEl: "#datePickerContainer",
        // opens: 'center',
        // drops: "down",
    });

    $("#open-check-btn").on("apply.daterangepicker", function (ev, picker) {
        this.start_date = picker.startDate.format("YYYY-MM-DD");
        this.end_date = picker.endDate.format("YYYY-MM-DD");
        var start_text_date = formatReadDate(this.start_date);
        var end_text_date = formatReadDate(this.end_date);
        $('#check-in-out-date').html(`${start_text_date} - ${end_text_date}`);
        $(this).val(
            picker.startDate.format("MM/DD/YYYY") +
            " - " +
            picker.endDate.format("MM/DD/YYYY")
        );
    });

    $("#open-check-btn").on("cancel.daterangepicker", function (ev, picker) {
        $(this).val("");
    });
});
// ------------------------ convert text format date -----------------
function formatReadDate(date) {
    var options = {
        weekday: 'short',
        day: 'numeric',
        month: 'short'
    };
    const new_date = new Date(date);
    return new_date.toLocaleDateString('en-US', options);
}

// ------------------ open add room dislog -------------------
$(document).on('click', '#open-room-dialog', function () {
    $('.room-person-count-div').toggleClass('active-room-person-count-div');
});
export default BookModule;
