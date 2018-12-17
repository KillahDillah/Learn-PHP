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


require 'home.php';