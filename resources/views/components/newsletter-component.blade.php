<div class="container d-flex flex-wrap col-12 main-newsletter-div">
    <button class="newsletter-btn"><i class="fa-solid fa-envelope"></i></button>
    <div class="d-flex flex-wrap col-md-4 col-12 newsletter-form-div">
        <div class="d-flex flex-wrap col-11 newsletter-head">
            <span class="col-2 newsletter-close"><i class="fa-solid fa-arrow-left"></i></span>
            <span class="col-10">NEWSLETTER</span>
        </div>
        <div class="d-flex flex-wrap col-11 type-newsletter">
            <p class="col-12">Type of send notification</p>
            {{-- <div class="d-flex flex-wrap col-12 gap-2 type-newsletter-1">
                <input type="checkbox" id="all_news">
                <span>All type of notification</span>
            </div>
            <div class="d-flex flex-wrap col-12 gap-2 type-newsletter-1">
                <input type="checkbox" id="room_news">
                <span>Send rooms related notification</span>
            </div>
            <div class="d-flex flex-wrap col-12 gap-2 type-newsletter-1">
                <input type="checkbox" id="price_news">
                <span>Send price related notification</span>
            </div> --}}
            <div class="d-flex flex-wrap col-12 type-newsletter-1">
                <select class="col-12" name="" id="news_letter_type">
                    <option value="" selected disabled>Select Type</option>
                    <option value="1">All Notification</option>
                    <option value="2">Price Notification</option>
                    <option value="3">Room Notification</option>
                </select>
            </div>
        </div>
        <div class="d-flex col-11 email-newsletter">
            <span class="col-1"><i class="fa-solid fa-envelope"></i></span>
            <input type="email" id="email_news" class="col-11" placeholder="example@gmail.com">
        </div>
        <p class="col-11 error" id="news_error"></p>
        <button class="col-11" id="newsletter-btn">SUBMIT</button>
    </div>

</div>
