jQuery(document).ready(function ($) {
    var $form_modal = $('.cd-payment-modal'),
        $form_login = $form_modal.find('#authentication'),
        $start_learning_button = $('input[name="start"]');

    // Show modal when the "Start Learning" button is clicked
    $start_learning_button.on('click', function (event) {
        event.preventDefault(); // Prevent the default form submission
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
