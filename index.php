<?php
require_once __DIR__ . '/models/Movie.php';

$howl = new Movie ( "Il castello errante di Howl", "Anime", "10/10");

$django = new Movie ( "Django Unchained", "Tarantinata", "10/10");

var_dump($howl, $django);