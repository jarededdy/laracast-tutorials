<?php

require 'functions.php';

$animals = ['dog', 'cat'];

$ageOne = 15;
$ageTwo = 21;
echo "I am $ageOne may I come in?<br />";
checkAge($ageOne);
echo "I am $ageTwo may I come in?<br />";
checkAge($ageTwo);

dd($animals);


require 'functions-excercise.view.php';
