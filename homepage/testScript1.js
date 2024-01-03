jQuery(document).ready(function ($) {
  var $form_modal = $('.cd-user-modal'),
    $form_login = $form_modal.find('#login-form'),
    $form_signup = $form_modal.find('#signup-form'),
    $main_nav = $('.navbar');


  $main_nav.on('click', function (event) {
    if ($(event.target).is($main_nav)) {
      $main_nav.children('ul').toggleClass('is-visible');
    } else {
      $main_nav.children('ul').removeClass('is-visible');
      $form_modal.addClass('is-visible');

      // Show the selected form and flip
      if ($(event.target).is('.cd-signup')) {
        $form_signup.show();
        $form_login.hide();
        // Trigger the flip by checking the flip checkbox
        $('#flip').prop('checked', true);
      } else {
        $form_login.show();
        $form_signup.hide();
        // Reset the flip checkbox
        $('#flip').prop('checked', false);
      }
    }
  });

  // Trigger flip animation when signup link is clicked
  $('.cd-signup').on('click', function (event) {
    $form_signup.show();
    $form_login.hide();
    // Trigger the flip by checking the flip checkbox
    $('#flip').prop('checked', true);
  });

  $('.cd-user-modal').on('click', function (event) {
    if ($(event.target).is($form_modal) || $(event.target).is('.cd-close-form')) {
      $form_modal.removeClass('is-visible');
      $form_login.show();
      $form_signup.hide();
      // Reset the flip checkbox
      $('#flip').prop('checked', false);
    }
  });

  $(document).keyup(function (event) {
    if (event.which == '27') {
      $form_modal.removeClass('is-visible');
      $form_login.show();
      $form_signup.hide();
      // Reset the flip checkbox
      $('#flip').prop('checked', false);
    }
  });
  $('.cd-logout').on('click', function (event) {
    // Prevent the default action of the link (navigation)
    event.preventDefault();

    // Add any additional actions you want to perform before logging out

    // Simulate a click on the "Sign in" link after the "Log out" link is clicked
    $('.cd-signin').click();

    // Perform any additional actions after logging out
    // For example, you might want to redirect the user to another page:
    // window.location.href = 'your-logout-success-page.php';
  });
  // Additional code if needed...
});
