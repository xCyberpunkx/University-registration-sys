<?php
include("dbcon.php");

// Retrieve data from the form
$name = $_POST['teacher_name'];
$grade = $_POST['grade'];
$module_code = $_POST['module'];

// Prepare SQL statement to insert data into the Teacher table
$sql = "INSERT INTO Teacher (name, grade, modulus_code) VALUES ('$name', '$grade', '$module_code')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    echo "<button><a href='home.php'>Return Home</a></button>";
    echo "<button><a href='fetch_teacher.php'>See All Teachers</a></button>";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





