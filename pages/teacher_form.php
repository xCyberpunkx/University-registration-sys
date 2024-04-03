<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="../styles/teacher.css">
       
  
</head>
<body>
    <div class="container">
        <h1>Add Teacher</h1>
        <form action="insert_teacher.php" method="post">
    <div class="form-group">
        <label for="teacher_name">Teacher Name:</label>
        <input type="text" id="teacher_name" name="teacher_name" placeholder="Enter teacher name" required>
    </div>
    <div class="form-group">
        <label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade" placeholder="Enter grade" required>
    </div>
    <div class="form-group">
        <label for="module">Module:</label>
        <select id="module" name="module">
            <option value="1">Linear Algebra</option>
            <option value="2">Calculus</option>
            <option value="3">System Design</option>
        </select>
    </div>
    <input type="submit" value="Add Teacher">
</form>

    </div>
</body>
</html>
