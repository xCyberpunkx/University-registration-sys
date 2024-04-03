<?php
include("dbcon.php");

// Prepare SQL statement to fetch data from the Student table
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {
  echo "<table><tr><th>Student Code</th><th>Name</th><th>Birthdate</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Student_code"]. "</td><td>" . $row["name"]. "</td><td>" . $row["birthdate"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
