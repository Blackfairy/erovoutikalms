jQuery(document).ready(function ($) {
    var $form_modal = $('.cd-payment-modal'),
        $form_login = $form_modal.find('#authentication'),
        $start_learning_button = $('input[name="start"]');

    // Show modal when the "Start Learning" button is clicked
    $start_learning_button.on('click', function (event) {
        event.preventDefault(); // Prevent the default form submission

        // AJAX request to check enrollment on the server
        $.ajax({
            type: 'POST',
            url: 'controllerUserData.php', // Replace with the actual path to your PHP file
            data: { start: 1 },
            success: function (response) {
                if (response === 'enrolled') {
                    // User is enrolled, redirect to the course page
                    window.location.href = 'html.html'; // Replace with the actual course page URL
                } else {
                    // User is not enrolled, display a message or perform other actions
                    console.log('User is not enrolled.');
                }
            },
            error: function (error) {
                console.log('Error:', error);
            }
        });

        $form_modal.addClass('is-visible');
        $form_login.show();
    });

    // Close modal when clicking the X button or pressing the Escape key
    $('.cd-close-form, #authentication').on('click', function () {
        $form_modal.removeClass('is-visible');
        $form_login.show();
    });

    // Additional code if needed...
});
