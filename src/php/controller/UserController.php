<?php
    session_start();
    require_once( realpath( dirname( __FILE__ ) ) . "/../model/User.php" );
    require_once( realpath( dirname( __FILE__ ) ) . "/../DAL.php" );

    class UserController
    {
        private $dal;

        /**
         * UserController constructor.
         */
        public function __construct ()
        {
            $this->dal = new DAL();
        }


        function save ( User $user )
        {
            $user_first_name = $this->dal->sql_escape( $user->getFirstName() );
            $user_last_name  = $this->dal->sql_escape( $user->getLastName() );
            $user_username   = $this->dal->sql_escape( $user->getUsername() );
            $user_id         = $this->dal->sql_escape( $user->getId() );

            if ( $user_id == null ) {
                $sql     = "INSERT INTO User (first_name, last_name, username) VALUES ('$user_first_name', '$user_last_name', '$user_username')";
                $user_id = $this->dal->query( $sql );

                if ( $user_id ) {
                    $user->setId( $user_id );

                    return $user;
                } else {
                    return null;
                }
            } else {
                $sql      = "UPDATE User SET first_name='$user_first_name', last_name='$user_last_name', username='$user_username' WHERE id = $user_id";
                $response = $this->dal->query( $sql );

                if ( $response ) {
                    return $user;
                } else {
                    return null;
                }
            }

        }

        public function create_table ()
        {
            $sql = "CREATE TABLE User ( id INT NOT NULL AUTO_INCREMENT UNIQUE, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL UNIQUE)";
            $this->dal->query( $sql );
        }

        public function find_by_id ( $user_id )
        {
            $sql    = "SELECT * from User WHERE id like '$user_id'";
            $result = $this->dal->query( $sql )[ 0 ];

            return User::from_query_result( $result );
        }
    }

    $user_controller = new UserController();