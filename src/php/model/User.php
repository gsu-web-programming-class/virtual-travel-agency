<?php

    class User
    {
        private $id;
        private $first_name;
        private $last_name;
        private $username;
        private $password;
        private $email;
        private $phone;
        private $address;

        /**
         * User constructor.
         *
         * @param $first_name
         * @param $last_name
         * @param $username
         */
        public function __construct ( $first_name, $last_name, $username, $password, $email, $phone = null, $address = null )
        {
            $this->first_name = $first_name;
            $this->last_name  = $last_name;
            $this->username   = $username;
            $this->password   = $password;
            $this->email      = $email;
            $this->phone      = $phone;
            $this->address    = $address;
        }

        /** @noinspection PhpUndefinedFieldInspection */
        public static function from_query_result ( DALQueryResult $dal_user )
        {
            $first_name = $dal_user->first_name;
            $last_name  = $dal_user->last_name;
            $username   = $dal_user->username;
            $password   = $dal_user->password;
            $email      = $dal_user->email;
            $phone      = $dal_user->phone;
            $address    = $dal_user->address;

            return new User( $first_name, $last_name, $username, $password, $email, $phone, $address );
        }

        public function getEmail ()
        {
            return $this->email;
        }

        public function getPhone ()
        {
            return $this->phone;
        }

        public function getAddress ()
        {
            return $this->address;
        }

        public function getFirstName ()
        {
            return $this->first_name;
        }

        public function getPassword ()
        {
            return $this->password;
        }

        public function getLastName ()
        {
            return $this->last_name;
        }

        public function getId ()
        {
            return $this->id;
        }

        public function setId ( $id )
        {
            $this->id = $id;
        }

        public function getUsername ()
        {
            return $this->username;
        }


    }