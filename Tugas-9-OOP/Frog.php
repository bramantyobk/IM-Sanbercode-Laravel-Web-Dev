<?php
    require_once "Animal.php";
    class Frog extends Animal {
        
        public function __construct($name) {
            $this->name = $name;
        }
        public function jump() {
            return "Hop Hop";
        }
    }
?>