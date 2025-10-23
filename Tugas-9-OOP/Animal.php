<?php
  class Animal {
      public $name;
      public $legs = 4;
      public $cold_bloded = 'no';

      public function __construct($name) {
          $this->name = $name;
      }
  }
?>