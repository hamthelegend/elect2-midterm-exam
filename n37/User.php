<?php

    abstract class Calculations {

        abstract function getTotalSpending();
        abstract function getRemainingBalance();

    }

    class User extends Calculations {

        protected string $name;
        protected float $spendingLimit;
        protected array $products;

        /**
         * @param string $name
         * @param float $spendingLimit
         */
        public function __construct(string $name, float $spendingLimit, array $products) {
            $this->name = $name;
            $this->spendingLimit = $spendingLimit;
            $this->products = $products;
        }

        /**
         * @return string
         */
        public function getName(): string {
            return $this->name;
        }

        /**
         * @return float
         */
        public function getSpendingLimit(): float {
            return $this->spendingLimit;
        }

        /**
         * @param float $spendingLimit
         */
        public function setSpendingLimit(float $spendingLimit): void {
            $this->spendingLimit = $spendingLimit;
        }

        /**
         * @return array
         */
        public function getProducts(): array {
            return $this->products;
        }

        /**
         * @param array $products
         */
        public function setProducts(array $products): void {
            $this->products = $products;
        }

        public function getTotalSpending() {
            $totalPrice = 0;
            foreach ($this->products as $product) {
                $totalPrice += $product->getPrice();
            }
            return $totalPrice;
        }

        public function getRemainingBalance() {
            return $this->spendingLimit - $this->getTotalSpending();
        }

    }