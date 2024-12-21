<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Teacher</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Edit Teacher</h1>
    <?php
    require_once '../../config/database.php';
    require_once '../../models/Teacher.php';

    $database = new Database();
    $db = $database->getConnection();
    $teacherModel = new Teacher($db);

    $teacher = $teacherModel->read($_GET['id']);
    ?>
    <form action="edit_teacher_process.php?id=<?php echo $teacher['id']; ?>" method="POST">
        <input type="text" name="first_name" value="<?php echo $teacher['first_name']; ?>" required>
        <input type="text" name="last_name" value="<?php echo $teacher['last_name']; ?>" required>
        <input type="number" name="subject_id" value="<?php echo $teacher['subject_id']; ?>" required>
        <button type="submit">Update Teacher</button>
    </form>
</body>
</html> 