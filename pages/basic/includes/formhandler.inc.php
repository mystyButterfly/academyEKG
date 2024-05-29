<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = $_POST["username"];
  $pwd = $_POST["pwd"];
  $scores = $_POST["scores"];

  try {
    require_once "dbh.inc.php";
   
    $query = "INSERT INTO score(username, pwd, scores) VALUES (:username, :pwd, :scores);";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":pwd", $pwd);
    $stmt->bindParam(":scores", $scores);

    $stmt->execute();

    $pdo = null;
    $stmt = null;

    header("Location: ../index.php");
    
    die();

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }
}
else{
  header("Location: ../index.php");
}