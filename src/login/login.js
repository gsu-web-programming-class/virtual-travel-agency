function init() {
    // document is loaded here
    var user = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var dataString = 'username=' + user + '&password=' + password;

    if (username.length === 0) {
        alert('Please fill in the username field');

    } else if (password.length === 0) {
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