<?php
    session_start();

    // TODO : Create logout functionality
    // echo "TODO : LOGOUT THE CURRENTLY SIGNED IN USER THEN REDIRECT TO LOGIN PAGE.";


    // remove all session variables
    session_unset();
    // destroy the session
    session_destroy();

    header( "Location: ../login" );