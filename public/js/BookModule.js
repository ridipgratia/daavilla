class BookModule {
    constructor() {
        this.start_date = "";
        this.end_date = "";
        this.room_data = {
            total_room: 1,
            room_length: 1
        }


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
    // ------------ add new room method ---------------
    async addNewRoom() {
        var room_content = `<div class="d-flex flex-wrap col-12 room-person-count-div-1 room-person-radius" id="room-div-1">
        <div class="d-flex flex-wrap col-12 room-person-count-head">
            <div class="d-flex flex-wrap room-person-count-head-1">
                <span>Room</span>
                <span>1</span>
            </div>
            <button><i class="fa-solid fa-trash"></i></button>
        </div>
        <div class="d-flex flex-wrap col-12 room-person-count-content">
            <div class="d-flex flex-wrap col-11 room-person-count-content-1">
                <p class="col-md-5 col-12">Number Of Adults</p>
                <div class="d-flex flex-wrap col-md-5 col-12 room-person-count-content-2">
                    <button><i class="fa-solid fa-minus"></i></button>
                    <p id="number-of-adult">2</p>
                    <input type="number" style="display: none;">
                    <button><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
            <div class="d-flex flex-wrap col-11 room-person-count-content-1">
                <p class="col-md-5 col-12">Number Of Child</p>
                <div class="d-flex flex-wrap col-md-5 col-12 room-person-count-content-2">
                    <button><i class="fa-solid fa-minus"></i></button>
                    <p id="number-of-child">2</p>
                    <input type="number" style="display: none;">
                    <button><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
    </div>`;
        $('.room-person-count-scroll-div').append(room_content);
    }
    fun() {
        $("#open-check-btn").daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: "Clear",
            },
            // parentEl: "#datePickerContainer",
            // opens: 'center',
            // drops: "down",
        });
        var self = this;
        $("#open-check-btn").on("apply.daterangepicker", function (ev, picker) {
            self.start_date = picker.startDate.format("YYYY-MM-DD");
            self.end_date = picker.endDate.format("YYYY-MM-DD");
            var start_text_date = self.formatReadDate(self.start_date);
            var end_text_date = self.formatReadDate(self.end_date);
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
    }
    // ------------------------ convert text format date -----------------
    formatReadDate(date) {
        var options = {
            weekday: 'short',
            day: 'numeric',
            month: 'short'
        };
        const new_date = new Date(date);
        return new_date.toLocaleDateString('en-US', options);
    }
}
export default BookModule;
