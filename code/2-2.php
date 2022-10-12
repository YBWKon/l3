<?php
session_start();

if(!empty($_POST["name"]) and !empty($_POST["surname"]) and !empty($_POST["age"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];
}

if (!empty($_SESSION)) {
    echo "Name ", $_SESSION["name"], "<br>";
    echo "Surname ", $_SESSION["surname"], "<br>";
    echo "Age ", $_SESSION["age"], "yo", "<br>";
    session_destroy();
}