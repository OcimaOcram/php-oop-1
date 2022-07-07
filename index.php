<?php
include DIR . '/movie.php';

$shrek = new Movie();
$shrek-> titolo = "Shrek";
$shrek-> regista = "Vicky Jenson";

var_dump($shrek);