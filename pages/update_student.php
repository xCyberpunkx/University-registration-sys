<?php
include("dbcon.php");

$student_code = $_POST['student_code'];
$name = $_POST['name'];
$birthdate = $_POST['birthdate'];

$sql = "UPDATE Student SET name=?, birthdate=? WHERE Student_code=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $name, $birthdate, $student_code);

if ($stmt->execute()) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$stmt->close();
$conn->close();
