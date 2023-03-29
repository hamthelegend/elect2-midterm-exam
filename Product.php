<?php

    abstract class Calculations {

//        abstract function getRemainingBalance($purchasePrice);

    }

    class Product extends Calculations {

        protected string $name;
        protected float $price;
        protected float $weight;

        public function __construct(string $name, float $price, float $weight) {
            $this->name = $name;
            $this->price = $price;
            $this->weight = $weight;
        }

        function add($x, $y) {
            return $x + $y;
        }

        function subtract($x, $y) {
            return $x - $y;
        }

        function multiply($x, $y) {
            return $x * $y;
        }

        function divide($x, $y) {
            return $x / $y;
        }


        public function getName(): string {
            return $this->name;
        }

        public function getPrice(): float {
            return $this->price;
        }

        public function getWeight(): float {
            return $this->weight;
        }

        public function __toString(): string {
            return "$this->name ($this->weight lb): $" . round($this->price, 2);
        }
        
    }