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
        const address = $('#address').val().trim();
        const specialRequest = $('#special-request').val().trim();

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

        if (address === "") {
            isValid = false;
            errorMessage += "Address is required.<br>";
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
            first_name: firstName,
            last_name: lastName,
            email: email,
            phone: phone,
            address: address,
            special_request: specialRequest
        };

        // Make the AJAX request
        $.ajax({
            type: 'POST',
            url: 'https://api.example.com/submit', // Replace with your API URL
            data: JSON.stringify(formData),
            contentType: 'application/json',
            success: function(response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Form submitted successfully!'
                });
                console.log('Success:', response);
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
