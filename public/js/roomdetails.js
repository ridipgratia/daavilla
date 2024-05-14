$(function () {
    console.log("fine");
    var onlyRoomPrice = 1000;
    var breakfastPrice = 2000;
    var lunchPrice = 3000;
    var dinnerPrice = 4000;
    var fullBoardPrice = 5000;
    var price = parseInt($('#price').html());

    $('#onlyRoom').click(function () {
        if ($(this).is(':checked')) {
            $('#price').html(price + onlyRoomPrice);
        } else {
            $('#price').html("");
        }
    })
    $('#breakfast').click(function () {
        if ($(this).is(':checked')) {
            $('#price').html(price + breakfastPrice);
        } else {
            $('#price').html("");
        }
    })
    $('#lunch').click(function () {
        if ($(this).is(':checked')) {
            $('#price').html(price + lunchPrice);
        } else {
            $('#price').html("");
        }
    })
    $('#dinner').click(function () {
        if ($(this).is(':checked')) {
            $('#price').html(price + dinnerPrice);
        } else {
            $('#price').html("");
        }
    })
    $('#fullboard').click(function () {
        if ($(this).is(':checked')) {
            $('#price').html(price + fullBoardPrice);
        } else {
            $('#price').html("");
        }
    })
});
