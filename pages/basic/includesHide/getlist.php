<?php

// Connect to the database
$db = new mysqli("sql207.infinityfree.com", "if0_35911567", "2VXJQkHuovGG", "if0_35911567_scorebasic");

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}


$sql = "SELECT username, scores FROM score ORDER BY scores DESC";
$result = $db->query($sql);

// Check if any records were found
if ($result->num_rows > 0) {
  // Print table header
  echo "<table>";
  echo "<tr>";
  echo "<th>Користувач</th><th>Бали</th>";
  echo "</tr>";

  // Print each record
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    foreach ($row as $key => $value) {
      echo "<td>{$value}</td>";
    }
    echo "</tr>";
  }
  echo "</table>";
} else {
  echo "No records found";
}

// Close the connection
$db->close();
?>