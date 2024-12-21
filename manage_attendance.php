<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Attendance</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Manage Attendance</h1>
    <a href="mark_attendance.php">Mark Attendance</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            require_once '../../models/Attendance.php';

            $database = new Database();
            $db = $database->getConnection();
            $attendanceModel = new Attendance($db);
            $attendances = $attendanceModel->getAll(); // Implement getAll method in Attendance model

            foreach ($attendances as $attendance) {
                echo "<tr>
                        <td>{$attendance['id']}</td>
                        <td>{$attendance['student_id']}</td>
                        <td>{$attendance['date']}</td>
                        <td>{$attendance['status']}</td>
                        <td>
                            <a href='edit_attendance.php?id={$attendance['id']}'>Edit</a>
                            <a href='delete_attendance.php?id={$attendance['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html> 