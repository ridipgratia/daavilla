<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center">
            <h1 class="mb-5"><span class="text-primary text-uppercase">Contact Us</span></h1>
            <h4 class="py-3">Got any questions or suggestions? Fill out this form to reach out</h4>
        </div>
        <div class="row g-4">
            <div class="col-md-3 map"> <!-- div 2 -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d662.2293867150188!2d91.77014862199864!3d26.143441659171533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375a59000860168d%3A0xff35643231d44043!2sHotel%20Daavilla!5e1!3m2!1sen!2sin!4v1716616267889!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-9"> <!-- div 3 -->
                <div class="contact-form">
                    <form id="contact-form">
                        @csrf
                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="contact-form-div">
                                    <label for="name">Your Name</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Write your name here">
                                    <p class="contact-error"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-form-div">
                                    <label for="email">Your Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Write your email address">
                                    <p class="contact-error"></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-form-div">
                                    <label for="subject">Subject</label>
                                    <input type="text" class="form-control" id="subject" name="subject"
                                        placeholder="Write your subject">
                                    <p class="contact-error"></p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="contact-form-div">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px" name="message"></textarea>
                                    <p class="contact-error"></p>
                                </div>
                            </div>
                            <div class="col-12 d-flex flex-row-reverse">
                                <button class="btn btn-primary contact-submit-btn" type="submit">Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
