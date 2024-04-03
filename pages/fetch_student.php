<?php
include("dbcon.php");

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Student Code</th><th>Student Name</th><th>Birthdate</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Student_code"]. "</td><td>" . $row["name"]. "</td><td>" . $row["birthdate"]. "</td></tr>";
  }
  echo "</table><br><button><a href='home.php'>Return Home</a></button>";
} else {
  echo "0 results";
}

$conn->close();


