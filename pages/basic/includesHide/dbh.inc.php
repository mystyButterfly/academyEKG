<?php

$dsn = "mysql:host=sql207.infinityfree.com;dbname=if0_35911567_scorebasic";
$dbusername = "if0_35911567";
$dbpassword = "2VXJQkHuovGG";

try {
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}