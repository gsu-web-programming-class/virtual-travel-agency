<?php
    session_start();
    class parkdb
    {
        private $conn;

        public function __construct ()
        {
            $this->connect();
        }

        private function connect ()
        {
            $DB_HOST     = "virtualtravelagency_db_1";
            $DB_USER     = "virtualtravelagency";
            $DB_PASSWORD = "virtualtravelagency";
            $DB_DB       = "virtualtravelagency";

            $this->conn = mysqli_connect( $DB_HOST, $DB_USER, $DB_PASSWORD )
            or die ( "<br/>Could not connect to MySQL server" );

            mysqli_select_db( $this->conn, $DB_DB )
            or die ( "<br/>Could not select the indicated database" );



        }

    }
    $parkDB = new parkdb();
