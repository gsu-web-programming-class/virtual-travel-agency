<?php

    class parker
    {
        private $month;
        private $day;
        private $year;
        private $price;
        private $spot;


        public function __construct ( $month, $day, $year, $price, $spot)
        {
            $this->month = $month;
            $this->day  = $day;
            $this->year  = $year;
            $this->price  = $price;
            $this->spot   = $spot;
        }

        /** @noinspection PhpUndefinedFieldInspection */
        public static function from_query_result ( parkerQueryResult $parker_user )
        {
            $month  = $parker_user->month;
            $day    = $parker_user->day;
            $year   = $parker_user->year;
            $price  = $parker_user->price;
            $spot   = $parker_user->spot;
            return new parker( $month, $day, $year, $price, $spot );
        }


        public function getmonth ()
        {
            return $this->month;
        }

        public function getday ()
        {
            return $this->day;
        }

        public function getyear ()
        {
            return $this->year;
        }

        public function getprice ()
        {
            return $this->price;
        }

        public function getspot ()
        {
            return $this->spot;
        }

        public function setspot ( $spot )
        {
            $this->spot = $spot;
        }

    }

