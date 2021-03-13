<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $prenom = $_POST["prenom"];
    $eml = $_POST["mail"];
    
    mail($eml);
}