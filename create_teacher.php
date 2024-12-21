<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Teacher</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Add New Teacher</h1>
    <form action="create_teacher_process.php" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="number" name="subject_id" placeholder="Subject ID" required>
        <button type="submit">Add Teacher</button>
    </form>
</body>
</html> 