<?php
    abstract class Arithmetic {

        abstract function add();

        abstract function subtract();

        abstract function multiply();

        abstract function divide();

    }

    class Calculator extends Arithmetic {

        public $x;
        public $y;

        /**
         * @param $x
         * @param $y
         */
        public function __construct($x, $y) {
            $this->x = $x;
            $this->y = $y;
        }

        function add() {
            return $this->x + $this->y;
        }

        function subtract() {
            return $this->x - $this->y;
        }

        function multiply() {
            return $this->x * $this->y;
        }

        function divide() {
            return $this->x / $this->y;
        }


    }