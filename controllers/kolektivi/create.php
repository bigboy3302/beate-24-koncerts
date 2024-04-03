<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);


if ($_SERVER["REQUEST_METHOD"] == "kolektivi"){
    $query = " INSERT INTO kolektivi (name, description) 
                VALUE (:name, :description);";
$params = [
    ":name" => $_POST["name"],
    ":description" => $_POST["description"]
];
$db->execute($query, $params);
header('location: /kolektivi');
die();
}




$title = "create a post";
require "views/kolektivs/create.view.php";