<?php

    class User
    {
        private $id;
        private $first_name;
        private $last_name;
        private $username;
        private $password;

        /**
         * User constructor.
         *
         * @param $first_name
         * @param $last_name
         * @param $username
         */
        public function __construct ( $first_name, $last_name, $username, $password )
        {
            $this->first_name = $first_name;
            $this->last_name  = $last_name;
            $this->username   = $username;
            $this->password   = $password;
        }

        /** @noinspection PhpUndefinedFieldInspection */
        public static function from_query_result ( DALQueryResult $dal_user )
        {
            $first_name = $dal_user->first_name;
            $last_name  = $dal_user->last_name;
            $username   = $dal_user->username;
            $password   = $dal_user->password;

            return new User( $first_name, $last_name, $username, $password );
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