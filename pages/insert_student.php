<?php
include("dbcon.php");

// Retrieve data from the form
$name = $_POST['student_name'];
$birthdate = date('Y-m-d', strtotime($_POST['birthdate']));

// Prepare SQL statement to insert data into the Student table
$sql = "INSERT INTO Student (name, birthdate) VALUES ('$name', '$birthdate')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    echo "<button><a href='home.php'>Return Home</a></button><br>";
    echo "<button><a href='fetch_student.php'>View All Students</a></button>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

