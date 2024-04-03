<?php
require "Database.php";
$config = require("config.php");

$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "pasakui"){
    $query = "INSERT INTO pasakumi (datums, nosaukums, vieta) VALUES (:datums, :nosaukums, :vieta);";

    $params = [
        ":datums" => $_POST["date"],
        ":nosaukums" => $_POST["title"],
        ":vieta" => $_POST["location"]
    ];
    $db->execute($query,$params);

    header("Location: /");
    die();
}

$title = "Pievieno datus";
require "views/pasakumi-delete.view.php";