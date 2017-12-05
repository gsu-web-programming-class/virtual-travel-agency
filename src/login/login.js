function init() {
    // document is loaded here
    var user = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var dataString = 'user1=' +user+ '&password1=' +password;

    if (!jQuery('#username').val()) {
        alert('Please fill in the username field');

    } else if (!jQuery('#password').val()) {
        alert('Please fill in the password field');

    } else {
        //Ajax code to submit form
        $.ajax({
            type: "POST",
            url: "login.php",
            data: dataString,
            cache: false,
            success: function() {
                window.location.href = "/";
            }
        });
    }
    return false;

}

// window.onload = init;