<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Subject</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Edit Subject</h1>
    <?php
    require_once '../../config/database.php';
    require_once '../../models/Subject.php';

    $database = new Database();
    $db = $database->getConnection();
    $subjectModel = new Subject($db);

    $subject = $subjectModel->read($_GET['id']);
    ?>
    <form action="edit_subject_process.php?id=<?php echo $subject['id']; ?>" method="POST">
        <input type="text" name="name" value="<?php echo $subject['name']; ?>" required>
        <input type="text" name="description" value="<?php echo $subject['description']; ?>" required>
        <button type="submit">Update Subject</button>
    </form>
</body>
</html> 