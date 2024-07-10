$(document).ready(function() {
    $('#bookingForm').on('submit', function(e) {
        e.preventDefault(); // Prevent the default form submission

        let isValid = true;
        let errorMessage = "";

        // Get form values
        const firstName = $('#f-name').val().trim();
        const lastName = $('#l-name').val().trim();
        const email = $('#email').val().trim();
        const phone = $('#phone').val().trim();
        const specialInstruction = $('#special-request').val().trim();
        const routeUrl = document.getElementById('route-url').value;

        // Validate each field
        if (firstName === "") {
            isValid = false;
            errorMessage += "First Name is required.<br>";
        }

        if (lastName === "") {
            isValid = false;
            errorMessage += "Last Name is required.<br>";
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (email === "" || !emailPattern.test(email)) {
            isValid = false;
            errorMessage += "A valid Email is required.<br>";
        }

        const phonePattern = /^\d{10}$/; // Assuming phone number should be 10 digits
        if (phone === "" || !phonePattern.test(phone)) {
            isValid = false;
            errorMessage += "A valid 10-digit Phone Number is required.<br>";
        }

        // Display error messages using SweetAlert if the form is not valid
        if (!isValid) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                html: errorMessage
            });
            return;
        }

        // Gather form data
        const formData = {
            f_name: firstName,
            l_name: lastName,
            email: email,
            phone: phone,
            specialinstruction: specialInstruction,
            checkin: "2024-07-19",
            checkout: "2024-07-20",
            adult: 2,
            children: 0,
            roomid: 1,
            discount: 0,
            amount: 3000
        };

        // Make the AJAX request
        $.ajax({
            type: 'POST',
            url: 'https://daavilla.in/apis/api/update-cart',
            data: JSON.stringify(formData),
            contentType: 'application/json',
            beforeSend: function(xhr) {
                xhr.setRequestHeader('Authorization', 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJjdXN0b21lcl9pZCI6MTIsImVtYWlsIjoiam9obmRvZUBleGFtcGxlLmNvbSJ9.p2b9N9kiVOM5R7KiF7UvSwH2pBkp3prX60a06tVP4WE');
            },
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Booking Successful!'
                }).then((result) => {
                    // Redirect to another view if the user clicks "OK"
                    if (result.isConfirmed) {
                        window.location.href = routeUrl;
                    }
                });
                console.log('Success:', response);
                
                // Redirect to another view
                
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred. Please try again.'
                });
                console.error('Error:', error);
            }
        });
    });
});
