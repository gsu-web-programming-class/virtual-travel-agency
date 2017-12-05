<?php
    session_start();

    require_once( realpath( dirname( __FILE__ ) ) . "/../php/DAL.php" );

    // print_r( $_POST );

    $username = $_POST[ 'username' ];
    $password = $_POST[ 'password' ];
    $dal      = new DAL();
    $user_id  = $dal->query( "SELECT id FROM User WHERE username='$username' and  `password`='$password'" );

    // print_r( $user_id[0]->id );

    $_SESSION[ "user_id" ] = $user_id[ 0 ]->id;
    //$_SESSION[ "username" ] = $username;
    //$_SESSION[ "password" ] = $password;

    // Redirecting is already handled on the client.
    // if ( ! empty( $_SESSION[ "user_id" ] ) ) {
    header( "Location: /" );
    // }

    //establish a connection to our db
    //$connection = mysql_connect("localhost", "root", "");
    //$db = mysql_select_db("our_db", $connection);

    //if (isset($_POST['name1'])){
    //  $query = mysql_query("insert into TABLE_NAME(user_id, username, password,... any other fields)
    //           values ('$username', '$password', ...)");
    //  echo "form submitted successfully";
    //}
    //mysql_close($connection);