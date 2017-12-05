function init() {
    // document is loaded here
    var xhttp = new XMLHttpRequest();
    var user = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var dataString = 'user1=' +user+ '&password1=' +password;

    if (!jQuery('#form #username').val() ) {
        alert('Please fill in the username field');

    }else if (!jQuery('#form #password').val() ) {
        alert('Please fill in the password field');

    } else {
        //Ajax code to submit form
        $.ajax({
            type: "POST",
            url: "login.php",
            data: dataString,
            cache: false,
            success: function() {
                window.location.href = "profile/index.html";
            }
        });
    }
    return false;

}

// window.onload = init;