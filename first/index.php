<?php

$greeting = "Hello, " . htmlspecialchars($_GET["name"]);
$age = "You are a " . htmlspecialchars($_GET["age"]) . " year old ";
$gender = htmlspecialchars($_GET["gender"]);
$name = " are family";

$familyMembers = [
    "Leah",
    "Audra",
    "Lynda",
    "Rex",
    "Ryan",
    "Russell",
    "Rowen",
    "Barkley",
    "Jack",
    "Cat"
];


require 'home.php';