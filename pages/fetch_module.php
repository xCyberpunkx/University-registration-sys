<?php
include ('dbcon.php');

$sql = "SELECT * FROM Module";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Module Code</th><th>Name</th><th>Modulus Coefficient</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Modulus_code"]. "</td><td>" . $row["name"]. "</td><td>" . $row["modulus_coefficient"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
