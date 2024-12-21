<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Class</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Add New Class</h1>
    <form action="create_class_process.php" method="POST">
        <input type="text" name="name" placeholder="Class Name" required>
        <input type="text" name="grade_level" placeholder="Grade Level" required>
        <input type="number" name="teacher_id" placeholder="Teacher ID" required>
        <button type="submit">Add Class</button>
    </form>
</body>
</html> 