<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Timetable Entry</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Edit Timetable Entry</h1>
    <?php
    require_once '../../config/database.php';
    require_once '../../models/Timetable.php';

    $database = new Database();
    $db = $database->getConnection();
    $timetableModel = new Timetable($db);

    $timetable = $timetableModel->get($_GET['id']); // Implement get method in Timetable model
    ?>
    <form action="edit_timetable_process.php?id=<?php echo $timetable['id']; ?>" method="POST">
        <input type="number" name="class_id" value="<?php echo $timetable['class_id']; ?>" required>
        <input type="number" name="subject_id" value="<?php echo $timetable['subject_id']; ?>" required>
        <input type="text" name="day" value="<?php echo $timetable['day']; ?>" required>
        <input type="time" name="start_time" value="<?php echo $timetable['start_time']; ?>" required>
        <input type="time" name="end_time" value="<?php echo $timetable['end_time']; ?>" required>
        <button type="submit">Update Timetable Entry</button>
    </form>
</body>
</html> 