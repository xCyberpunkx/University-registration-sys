<?php
include("dbcon.php");

$sql = "SELECT Teacher.Teacher_code, Teacher.name AS teacher_name, Teacher.grade, Module.name AS module_name 
        FROM Teacher 
        INNER JOIN Module ON Teacher.modulus_code = Module.Modulus_code";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Teacher Code</th><th>Name</th><th>Grade</th><th>Module Name</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Teacher_code"]. "</td><td>" . $row["teacher_name"]. "</td><td>" . $row["grade"]. "</td><td>" . $row["module_name"]. "</td></tr>";
    }
    echo "</table>";
    echo "<button><a href='home.php'>Return Home</a></button>";
} else {
    echo "0 results";
}

$conn->close();



