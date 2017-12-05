<?php
    session_start();

    $username = $_POST['user1'];
    $password = $_POST['password1'];

    $_SESSION[ "user_id" ] = "3";
    $_SESSION[ "username" ] = $username;
    $_SESSION[ "password" ] = $password;

    //establish a connection to our db
    //$connection = mysql_connect("localhost", "root", "");
    //$db = mysql_select_db("our_db", $connection);

    //if (isset($_POST['name1])){
    //  $query = mysql_query("insert into TABLE_NAME(user_id, username, password,... any other fields)
    //           values ('$username', '$password', ...)");
    //  echo "form submitted successfully";
    //}
    //mysql_close($connection);
?>
