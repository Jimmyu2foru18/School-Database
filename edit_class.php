<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Class</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Edit Class</h1>
    <?php
    require_once '../../config/database.php';
    require_once '../../models/ClassModel.php';

    $database = new Database();
    $db = $database->getConnection();
    $classModel = new ClassModel($db);

    $class = $classModel->read($_GET['id']);
    ?>
    <form action="edit_class_process.php?id=<?php echo $class['id']; ?>" method="POST">
        <input type="text" name="name" value="<?php echo $class['name']; ?>" required>
        <input type="text" name="grade_level" value="<?php echo $class['grade_level']; ?>" required>
        <input type="number" name="teacher_id" value="<?php echo $class['teacher_id']; ?>" required>
        <button type="submit">Update Class</button>
    </form>
</body>
</html> 