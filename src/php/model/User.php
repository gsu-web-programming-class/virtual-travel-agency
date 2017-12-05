<?php

    class User
    {
        private $first_name;
        private $last_name;
        private $id;
        private $username;

        /**
         * User constructor.
         *
         * @param $first_name
         * @param $last_name
         * @param $username
         */
        public function __construct ( $first_name, $last_name, $username )
        {
            $this->first_name = $first_name;
            $this->last_name  = $last_name;
            $this->username   = $username;
        }

        /** @noinspection PhpUndefinedFieldInspection */
        public static function from_query_result ( DALQueryResult $dal_user )
        {
            $first_name = $dal_user->first_name;
            $last_name  = $dal_user->last_name;
            $username   = $dal_user->username;

            return new User( $first_name, $last_name, $username );
        }

        public function getFirstName ()
        {
            return $this->first_name;
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