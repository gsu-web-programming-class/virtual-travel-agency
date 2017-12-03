<?php

    class DALQueryResult
    {

        private $_results = [];

        public function __construct ()
        {
        }

        public function __get ( $var )
        {
            if ( isset( $this->_results[ $var ] ) ) {
                return $this->_results[ $var ];
            } else {
                return null;
            }
        }

        public function __set ( $var, $val )
        {
            $this->_results[ $var ] = $val;
        }
    }

    class DAL
    {

        public function __construct ()
        {
        }

        public function drop_table ( $table_name )
        {
            $conn       = $this->dbconnect();
            $table_name = $this->sql_escape( $table_name, $conn );

            return $this->query( "DROP TABLE IF EXISTS " . $table_name, $conn );
        }

        private function dbconnect ()
        {
            $DB_HOST     = "localhost";
            $DB_USER     = "virtualtravelagency";
            $DB_PASSWORD = "virtualtravelagency";
            $DB_DB       = "virtualtravelagency";

            $conn = mysql_connect( $DB_HOST, $DB_USER, $DB_PASSWORD )
            or die ( "<br/>Could not connect to MySQL server" );

            mysql_select_db( $DB_DB, $conn )
            or die ( "<br/>Could not select the indicated database" );

            return $conn;
        }

        public function sql_escape ( $var, $conn )
        {
            $post = mysql_real_escape_string( $var, $conn );

            return $post;
        }

        public function query ( $sql, $conn )
        {

            $res = mysql_query( $sql );

            if ( $res ) {
                if ( strpos( $sql, 'SELECT' ) === false && strpos( $sql, 'INSERT' ) === false ) {
                    return true;
                }
            } else {
                if ( strpos( $sql, 'SELECT' ) === false && strpos( $sql, 'INSERT' ) === false ) {
                    return false;
                } else {
                    return null;
                }
            }

            $results = [];

            if ( ! ( strpos( $sql, 'INSERT' ) === false ) ) {
                return mysql_insert_id( $conn );
            }

            while ( $row = mysql_fetch_array( $res ) ) {

                $result = new DALQueryResult();

                foreach ( $row as $k => $v ) {
                    $result->$k = $v;
                }

                $results[] = $result;
            }

            return $results;
        }
    }
 