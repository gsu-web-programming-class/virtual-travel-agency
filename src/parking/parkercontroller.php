<?php
    session_start();
    require_once( realpath( dirname( __FILE__ ) ) . "/../model/parker.php" );
    require_once( realpath( dirname( __FILE__ ) ) . "/../parkdb.php" );

    class parkercontroller
    {
        private $parks;

        /**
         * UserController constructor.
         */
        public function __construct ()
        {
            $this->parks = new parkdb();
        }


        /**
         * @param User $user
         */
        function save ( User $user )
        {
            $user_month = $this->dal->sql_escape( $user->getmonth() );
            $user_day   = $this->dal->sql_escape( $user->getday() );
            $user_year  = $this->dal->sql_escape( $user->getyear() );
            $user_price = $this->dal->sql_escape( $user->getprice() );
            $user_spot  = $this->dal->sql_escape( $user->getspot() );
        }

        //     if ( $user_id == null ) {
        //         $sql     = "INSERT INTO User (first_name, last_name, username, `password`, email, phone, address) VALUES ('$user_first_name', '$user_last_name', '$user_username', '$user_password', '$user_email', '$user_phone', '$user_address')";
        //         $user_id = $this->dal->query( $sql );
        //
        //         if ( $user_id ) {
        //             $user->setId( $user_id );
        //
        //             return $user;
        //         } else {
        //             return null;
        //         }
        //     } else {
        //         $sql      = "UPDATE Parker SET month='$user_month', last_name='$user_day', username='$user_year', `password`='$user_price', email='$user_spot' WHERE id = $user_id";
        //         $response = $this->dal->query( $sql );
        //
        //         if ( $response ) {
        //             return $user;
        //         } else {
        //             return null;
        //         }
        //     }
        //
        // }

        public
        function create_table ()
        {
            $sql = "CREATE TABLE Parker (  month VARCHAR(255) NOT NULL, day VARCHAR(255) NOT NULL, year VARCHAR(255) NOT NULL UNIQUE, price VARCHAR(255) NOT NULL, spot VARCHAR(255) NOT NULL)";
            $this->dal->query( $sql );
        }

        public
        function find_by_date ( $user_month, $user_day, $user_year )
        {
            $sql    = "SELECT month,day,year from parker WHERE  month = '$user_month' and day= '$user_day' and year = '$user_year'";
            $result = $this->dal->query( $sql )[ 0 ];

            return User::from_query_result( $result );
        }
    }

    $parker_controller = new parkercontroller();
