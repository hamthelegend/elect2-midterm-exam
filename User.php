<?php
    class User {
        
        protected string $name;
        protected float $spendingLimit;

        /**
         * @param string $name
         * @param float $spendingLimit
         */
        public function __construct(string $name, float $spendingLimit) {
            $this->name = $name;
            $this->spendingLimit = $spendingLimit;
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

    }