<?php
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_code = $_POST['teacher_code']; // Assuming you have a form field for selecting the teacher to update
    $name = $_POST['teacher_name'];
    $grade = $_POST['grade'];
    $module_code = $_POST['module']; // Assuming you have a form field for selecting the module

    // Prepare SQL statement to update the teacher record
    $sql = "UPDATE Teacher SET name='$name', grade='$grade', modulus_code='$module_code' WHERE Teacher_code='$teacher_code'";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher record updated successfully<br>";
        echo "<button><a href='home.php'>Return Home</a></button><br>";
        echo "<button><a href='fetch_teacher.php'>See All Teachers</a></button>";    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();

