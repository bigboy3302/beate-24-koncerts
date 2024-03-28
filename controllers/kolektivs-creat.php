<?php

require "Database.php";
$config = require("config.php");
$db = new Database($config);

//if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["title"]) !="" && $_POST["category-id"] <= 3 && strlen($_POST["title"]) <=255) {
if ($_SERVER["REQUEST_METHOD"] == "POST" ){
    $errors = [];

    if(trim($_POST["name"]) ==""){
        $errors["name"] = "Title cannot be empty";
    }
   if(strlen($_POST["name"]) >255){
        $errors["name"] = "Cannot be longer then 255 chars";
    }
    if($_POST["description"] < 1 || $_POST["description"] > 3 ){
        $errors["description"] = "category ID invalid";
    }
    if(empty($errors)){ 
  $query = "INSERT INTO posts (title, category_id)
            VALUES (:title, :category_id)";
  $params = [
    ":title" => $_POST["title"],
    ":category_id" => $_POST["category-id"]
  ];
  $db->execute($query, $params);

  header("Location: /");
  die();
    }

  // Ja viss iet,
  // tad izveido šādu pasākumu un
  // kolektīvu pievienošanu
  // CKC projektā
} //elseif($_SERVER["REQUEST_METHOD"] == "POST"){
  //  echo"aizpildi laucinu pridurak mby parak gars teksts vai id nepareiz!!!!!!!!!!";
  //}

$title = "Create a Post";
require "views/posts-create.view.php";