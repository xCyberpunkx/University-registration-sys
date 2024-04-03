<?php
include("dbcon.php");
$student_code = $_POST['student_code'];

$sql = "DELETE FROM Student WHERE Student_code=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $student_code);

if ($stmt->execute()) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$stmt->close();
$conn->close();
