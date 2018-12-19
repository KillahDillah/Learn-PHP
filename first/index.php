<?php

$name = htmlspecialchars($_GET["name"]);
$greeting = "Hello, $name";
$age = "You are a " . htmlspecialchars($_GET["age"]) . " year old ";
$gender = htmlspecialchars($_GET["gender"]);
$nameSpan = " are family";
$petSpan = " are animals";

$familyMembers = [
    "Leah",
    "Audra",
    "Lynda",
    "Rex",
    "Ryan",
    "Russell",
    "Rowen"
];

$petNames = [
    "Barkley",
    "Jack",
    "Cat"
];

$Leah = [
    "age" => 29,
    "hair" => "brown",
    "height" => "short"
];

var_dump('before', $Leah);  //notice the difference in browser

$Leah['gender'] = 'female'; //add a key value pair
unset($Leah["hair"]);  //remove key value pair

var_dump('after', $Leah);  //notice the difference in browser

require 'home.php';