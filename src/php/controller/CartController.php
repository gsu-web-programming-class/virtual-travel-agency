<?php

    require_once( realpath( dirname( __FILE__ ) ) . "/../DAL.php" );

    class CartController
    {
        private $dal;

        /**
         * CartController constructor.
         */
        public function __construct ()
        {
            $this->dal = new DAL();
        }


        function save ( User $user )
        {
            $conn = $this->dal->connect();
            // $user_first_name = $this->dal->sql_escape( $conn, $user->getFirstName() );
            // $user_last_name  = $this->dal->sql_escape( $conn, $user->getLastName() );
            // $user_username   = $this->dal->sql_escape( $conn, $user->getUsername() );
            // $user_id         = $this->dal->sql_escape( $conn, $user->getId() );
            //
            // if ( $user_id == null ) {
            //     $sql     = "INSERT INTO User (first_name, last_name, username) VALUES ('$user_first_name', '$user_last_name', '$user_username')";
            //     $user_id = $this->dal->query( $conn, $sql );
            //
            //     if ( $user_id ) {
            //         $user->setId( $user_id );
            //
            //         return $user;
            //     } else {
            //         return null;
            //     }
            // } else {
            //     $sql      = "UPDATE User SET first_name='$user_first_name', last_name='$user_last_name', username='$user_username' WHERE id = $user_id";
            //     $response = $this->dal->query( $conn, $sql );
            //
            //     if ( $response ) {
            //         return $user;
            //     } else {
            //         return null;
            //     }
            // }

            // TODO : Save cart or maybe add item to cart/remove item from cart

        }

        public function create_table ()
        {
            $conn = $this->dal->connect();
            $sql  = "CREATE TABLE User ( id INT NOT NULL AUTO_INCREMENT UNIQUE, user_id INT NOT NULL UNIQUE)";
            $this->dal->query( $conn, $sql );
        }


        function get_cart_items ()
        {
            /* User cart from get */

            // $conn = $this->dbconnect();

            // return $this->query($sql, $conn);
        }

        function get_cart_item_count ()
        {
            // TODO : Query DB to get item count..
            return 1;
        }
    }

    $cart_controller = new CartController();