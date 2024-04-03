<?php

include ('dbcon.php');

$sql = "SELECT * FROM Exam";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Student Code</th><th>Modulus Code</th><th>Mark</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Student_code"]. "</td><td>" . $row["modulus_code"]. "</td><td>" . $row["mark"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

