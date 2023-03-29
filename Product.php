<?php
    
    abstract class Calculator {
        
        abstract function add($x, $y);
        abstract function subtract($x, $y);
        abstract function multiply($x, $y);
        abstract function divide($x, $y);
        
    }

    class Product extends Calculator {

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