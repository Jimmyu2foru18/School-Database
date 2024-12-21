<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Grade</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Add New Grade</h1>
    <form action="add_grade_process.php" method="POST">
        <input type="number" name="student_id" placeholder="Student ID" required>
        <input type="number" name="subject_id" placeholder="Subject ID" required>
        <input type="number" name="grade" placeholder="Grade" required>
        <input type="text" name="remarks" placeholder="Remarks">
        <button type="submit">Add Grade</button>
    </form>
</body>
</html> 