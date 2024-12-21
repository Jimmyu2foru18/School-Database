<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Subject</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Add New Subject</h1>
    <form action="create_subject_process.php" method="POST">
        <input type="text" name="name" placeholder="Subject Name" required>
        <input type="text" name="description" placeholder="Description" required>
        <button type="submit">Add Subject</button>
    </form>
</body>
</html> 