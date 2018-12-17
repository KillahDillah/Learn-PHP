<?php

$greeting = "Hello, " . htmlspecialchars($_GET["name"]);
$age = "You are a " . htmlspecialchars($_GET["age"]) . " year old ";
$gender = htmlspecialchars($_GET["gender"]);

require 'home.php';
require 'contact.php';