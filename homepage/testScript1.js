jQuery(document).ready(function ($) {
  var $form_modal = $('.cd-user-modal'),
    $form_login = $form_modal.find('#login-form'),
    $form_signup = $form_modal.find('#signup-form'),
    $main_nav = $('.navbar');

  // Click event for the main navigation
  $main_nav.on('click', function (event) {
    if ($(event.target).is('.cd-signin, .cd-signup')) {
      // Show the selected form and flip
      $form_modal.addClass('is-visible');

      if ($(event.target).is('.cd-signup')) {
        $form_signup.show();
        $form_login.hide();
        $('#flip').prop('checked', true);
      } else {
        $form_login.show();
        $form_signup.hide();
        $('#flip').prop('checked', false);
      }
    }
  });

  // Click event for the signup link
  $('.cd-signup').on('click', function (event) {
    $form_modal.addClass('is-visible');
    $form_signup.show();
    $form_login.hide();
    $('#flip').prop('checked', true);
  });

  // Click event for the modal background and close button
  $('.cd-user-modal').on('click', function (event) {
    if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
      $form_modal.removeClass('is-visible');
      $form_login.show();
      $form_signup.hide();
      $('#flip').prop('checked', false);
    }
  });

  // Keyup event to close the modal on pressing Esc key
  $(document).keyup(function (event) {
    if (event.which == '27') {
      $form_modal.removeClass('is-visible');
      $form_login.show();
      $form_signup.hide();
      $('#flip').prop('checked', false);
    }
  });

  // Logout event
  $('.cd-logout').on('click', function (event) {
    event.preventDefault();
    $('.cd-signin').click();
    // Additional logout actions...
  });

  // Additional code if needed...
});
