<?php
    /**
     * Created by PhpStorm.
     * User: joshuaking
     * Date: 12/3/17
     * Time: 16:38
     */

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