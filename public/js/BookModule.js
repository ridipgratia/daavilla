class BookModule{
    constructor(){
        this.start_date="";
        this.end_date="";
    }
}
$(function () {
    $("#open-check-btn").daterangepicker({
        autoUpdateInput: false,
        locale: {
            cancelLabel: "Clear",
        },
        parentEl: "#datePickerContainer",
        // opens: 'center',
        // drops: "down",
    });

    $("#open-check-btn").on("apply.daterangepicker", function (ev, picker) {
        this.start_date=picker.startDate.format("YYYY-MM-DD");
        this.end_date=picker.endDate.format("YYYY-MM-DD");
        var start_text_date=formatReadDate(this.start_date);
        var end_text_date=formatReadDate(this.end_date);
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
function formatReadDate(date){
    var options={
        weekday:'short',
        day:'numeric',
        month:'short'
    };
    const new_date=new Date(date);
    return  new_date.toLocaleDateString('en-US', options);
}
export default BookModule;
