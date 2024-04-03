<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link rel="stylesheet" href="../styles/student.css">
 
    
</head>
<body>
    <div class="container">
        <h1>Add Student</h1>
        <form action="insert_student.php" method="post">
            <div class="form-group">
                <label for="student_name">Student Name:</label>
                <input type="text" id="student_name" name="student_name" placeholder="Enter student name" required>
            </div>
            <div class="form-group">
                <label for="birthdate">Birthdate:</label>
                <input type="text" id="birthdate" name="birthdate" placeholder="yyyy-dd-mm" required>
            </div>
            <input type="submit" value="Add Student">
        </form>
    </div>
</body>
</html>
