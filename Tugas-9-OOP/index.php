<?php
  require_once "Animal.php";
  require_once "Ape.php";
  require_once "Frog.php";

  echo "Animal";
  echo "<br>";
  $sheep = new Animal('shaun');
  echo "Name : ". $sheep->name . "<br>";
  echo "Legs : ". $sheep->legs . "<br>";
  echo "Cold Bloded : ". $sheep->cold_bloded . "<br> <br>";

  echo "Frog";
  echo "<br>";
  $kodok = new Frog('buduk');
  echo "Name :". $kodok->name . "<br>";
  echo "Legs : ". $kodok->legs . "<br>";
  echo "Cold Bloded : ". $kodok->cold_bloded . "<br>";
  echo "Jump :". $kodok->jump() . "<br> <br>"; 

  echo "Ape";
  echo "<br>";
  $sungokong = new Ape('kera sakti');
  echo "Name : ". $sungokong->name . "<br>";
  echo "Legs : ". $sungokong->legs . "<br>";
  echo "Cold Bloded : ". $sungokong->cold_bloded . "<br>";
  echo "Yell : ". $sungokong->yell() . "<br> <br>"; 
?>