<?php
    session_start();

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

        public function drop_table ( $table_name )
        {
            $table_name = $this->sql_escape( $table_name );

            return $this->query( "DROP TABLE IF EXISTS " . $table_name );
        }

        public function sql_escape ( $var )
        {
            $post = mysqli_real_escape_string( $this->conn, $var );

            return $post;
        }

        public function query ( $sql )
        {

            $res = mysqli_query( $this->conn, $sql );

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
                return mysqli_insert_id( $this->conn );
            }

            while ( $row = mysqli_fetch_array( $res ) ) {

                $result = new DALQueryResult();

                foreach ( $row as $k => $v ) {
                    $result->$k = $v;
                }

                $results[] = $result;
            }

            return $results;
        }
    }

    $dal = new DAL();