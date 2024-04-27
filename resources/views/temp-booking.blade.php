<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>

<body>
    <input type="text" value="" id="pickadate" class="pickadate" />
    <br />
    <input type="text" value="" id="pickadateandtime" class="pickatime" />

    <button id="btn">Check</button>
    <input type="date" id="date_value">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        $("#pickadate").flatpickr();
        $("#pickadateandtime").flatpickr({
            enableTime: true,
            dateFormat: "Y-m-d"
        });
        $(document).on('click', '#btn', function() {
            var check_in = $('#pickadate').val();
            var date_value = $('#date_value').val();
            $.ajax({
                type: "get",
                url: "/first-booking-page-get",
                data: {
                    check_in: check_in,
                    date_value: date_value
                },
                success: function(result) {
                    console.log(result);
                },
                error: function(data) {
                    console.log(data)
                }
            });
        })
    </script>
</body>

</html>
