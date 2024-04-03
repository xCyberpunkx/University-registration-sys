//
<?php
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_code = $_POST['teacher_code']; // Assuming you have a form field for selecting the teacher to delete

    // Prepare SQL statement to delete the teacher record
    $sql = "DELETE FROM Teacher WHERE Teacher_code='$teacher_code'";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher record deleted successfully<br>";
        echo "<button><a href='home.php'>Return Home</a></button><br>";
        echo "<button><a href='fetch_teacher.php'>See All Teachers</a></button>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();

