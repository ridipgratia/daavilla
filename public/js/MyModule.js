class MyModule {
    constructor() {
        console.log("Ok");;
    }


    // --------------- submit newsletter ----------------
    async submitNewsletter() {
        var news_type = $('#news_letter_type').val();
        var email = $('#email_news').val();
        $('#newsletter-btn').html(`<span id="contact-loader"><i class="fa-solid fa-spinner"></i></span>`);
        await $.ajax({
            type: "post",
            url: "/newsletter-submit",
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                email: email,
                news_type: news_type
            },
            success: function (result) {
                if (result.status == 400) {
                    var message = '';
                    result.message.forEach(mes => {
                        message += mes + '<br>';
                    });
                    $('#news_error').css({
                        "color": "red"
                    });
                    $('#news_error').html(message);
                } else {
                    $('#news_error').css({
                        "color": "blue"
                    });
                    $('#news_error').html(result.message);
                }
            }, error: function (data) {
                console.log(data);
            }
        });
        $('#newsletter-btn').html('Submit');
    }

    // ----------------------- contact form submit -----------------------
    async contactFormSubmit() {
        var form_data = new FormData($('#contact-form')[0]);
        $('.contact-submit-btn').html(`<span id="contact-loader"><i class="fa-solid fa-spinner"></i></span>`);
        await $.ajax({
            type: "post",
            url: "/contact-form",
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data: form_data,
            dataType: "json",
            contentType: false,
            processData: false,
            success: function (result) {
                $('.contact-error').html('');
                if (result.status == 400) {
                    const error_name = [
                        'name',
                        'email',
                        'subject',
                        'message'
                    ];
                    for (var i = 0; i < $('.contact-error').length; i++) {
                        result.message.forEach(mes => {
                            if (mes.indexOf(error_name[i]) !== -1) {
                                $('.contact-error').eq(i).html(mes);
                            }
                        });
                    }
                } else if (result.status == 500) {
                    Swal.fire({
                        title: "Information",
                        text: result.message,
                        icon: "error"
                    });
                } else {
                    Swal.fire({
                        title: "Information",
                        text: result.message,
                        icon: "success"
                    });
                }
            }, error: function (data) {
                console.log(data);
            }
        });
        $('.contact-submit-btn').html('Send');
    }
}
export default MyModule;