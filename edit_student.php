<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Edit Student</h1>
    <?php
    require_once '../../config/database.php';
    require_once '../../models/Student.php';

    $database = new Database();
    $db = $database->getConnection();
    $studentModel = new Student($db);

    $student = $studentModel->read($_GET['id']);
    ?>
    <form action="edit_student_process.php?id=<?php echo $student['id']; ?>" method="POST">
        <input type="text" name="first_name" value="<?php echo $student['first_name']; ?>" required>
        <input type="text" name="last_name" value="<?php echo $student['last_name']; ?>" required>
        <input type="date" name="dob" value="<?php echo $student['dob']; ?>" required>
        <select name="gender" required>
            <option value="male" <?php echo $student['gender'] == 'male' ? 'selected' : ''; ?>>Male</option>
            <option value="female" <?php echo $student['gender'] == 'female' ? 'selected' : ''; ?>>Female</option>
        </select>
        <input type="text" name="address" value="<?php echo $student['address']; ?>" required>
        <input type="number" name="class_id" value="<?php echo $student['class_id']; ?>" required>
        <button type="submit">Update Student</button>
    </form>
</body>
</html> 