<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Timetable</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Manage Timetable</h1>
    <a href="create_timetable.php">Add New Timetable Entry</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Class ID</th>
                <th>Subject ID</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            require_once '../../models/Timetable.php';

            $database = new Database();
            $db = $database->getConnection();
            $timetableModel = new Timetable($db);
            $timetables = $timetableModel->getAll(); // Implement getAll method in Timetable model

            foreach ($timetables as $timetable) {
                echo "<tr>
                        <td>{$timetable['id']}</td>
                        <td>{$timetable['class_id']}</td>
                        <td>{$timetable['subject_id']}</td>
                        <td>{$timetable['day']}</td>
                        <td>{$timetable['start_time']}</td>
                        <td>{$timetable['end_time']}</td>
                        <td>
                            <a href='edit_timetable.php?id={$timetable['id']}'>Edit</a>
                            <a href='delete_timetable.php?id={$timetable['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html> 