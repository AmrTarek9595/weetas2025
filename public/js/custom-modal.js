var modal = document.getElementById("loginModal");

var btn = document.getElementById("loginBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function handleLoginForm(event) {
  event.preventDefault();
  var form = event.target;

  var formData = $(form).serialize();
  $.ajax({
    type: "POST",
    url: '<?php echo admin_url("admin-ajax.php"); ?>',
    data: formData,
    success: function(response) {
      if(response.success) {
        modal.style.display = "none";
        location.reload();
      } else {
        $('.form-message').html(response.data.message).show();
      }
    },
    error: function(error) {
      console.log(error);
    }
  });

  return false; 
}
jQuery(document).ready(function($) {
    var modal = document.getElementById("loginModal");
    var btn = document.getElementById("loginBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $('#loginForm').on('submit', function(event) {
        event.preventDefault();
        var form = $(this);
        var formData = form.serialize();
        
        $.ajax({
            type: "POST",
            url: bs_ajax_params.ajax_url,
            data: formData,
            success: function(response) {
                if(response.success) {
                    modal.style.display = "none";
                    location.reload();
                } else {
                    $('.form-message').html(response.data.message).show();
                }
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    // Select the popup and links
    var loginModal = document.getElementById('loginModal');
    var forgotPasswordLink = document.getElementById('forgotPasswordLink');
    var registerLink = document.getElementById('registerLink');

    function hidePopup() {
        if (loginModal) {
            loginModal.style.display = 'none';
        }
    }

    if (forgotPasswordLink) {
        forgotPasswordLink.addEventListener('click', hidePopup);
    }

    if (registerLink) {
        registerLink.addEventListener('click', hidePopup);
    }

    var closeButton = loginModal ? loginModal.querySelector('.close') : null;
    if (closeButton) {
        closeButton.addEventListener('click', function() {
            loginModal.style.display = 'none';
        });
    }
});

