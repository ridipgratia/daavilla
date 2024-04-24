class MyModule {
    constructor() {
        console.log("Ok");;
    }


    // --------------- submit newsletter ----------------
    async submitNewsletter() {
        var news_type = $('#news_letter_type').val();
        var email = $('#email_news').val();
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
    }
}
export default MyModule;