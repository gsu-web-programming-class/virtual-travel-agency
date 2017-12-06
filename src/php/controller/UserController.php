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
            $user_password   = $this->dal->sql_escape( $user->getPassword() );
            $user_email      = $this->dal->sql_escape( $user->getEmail() );
            $user_phone      = $this->dal->sql_escape( $user->getPhone() );
            $user_address    = $this->dal->sql_escape( $user->getAddress() );
            $user_id         = $this->dal->sql_escape( $user->getId() );

            if ( $user_id == null ) {
                $sql     = "INSERT INTO User (first_name, last_name, username, `password`, email, phone, address) VALUES ('$user_first_name', '$user_last_name', '$user_username', '$user_password', '$user_email', '$user_phone', '$user_address')";
                $user_id = $this->dal->query( $sql );

                if ( $user_id ) {
                    $user->setId( $user_id );

                    return $user;
                } else {
                    return null;
                }
            } else {
                $sql      = "UPDATE User SET first_name='$user_first_name', last_name='$user_last_name', username='$user_username', `password`='$user_password', email='$user_email', phone='$user_phone', address='$user_address' WHERE id = $user_id";
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
            $sql = "CREATE TABLE User ( id INT NOT NULL AUTO_INCREMENT UNIQUE, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL UNIQUE, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(255), address VARCHAR(255))";
            $this->dal->query( $sql );
        }

        public function find_by_id ( $user_id )
        {
            $sql    = "SELECT * from User WHERE id='$user_id'";
            $result = $this->dal->query( $sql )[ 0 ];

            return User::from_query_result( $result );
        }
    }

    $user_controller = new UserController();