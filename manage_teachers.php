<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Teachers</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Manage Teachers</h1>
    <a href="create_teacher.php">Add New Teacher</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            require_once '../../models/Teacher.php';

            $database = new Database();
            $db = $database->getConnection();
            $teacherModel = new Teacher($db);
            $teachers = $teacherModel->readAll(); // Implement readAll method in Teacher model

            foreach ($teachers as $teacher) {
                echo "<tr>
                        <td>{$teacher['id']}</td>
                        <td>{$teacher['first_name']} {$teacher['last_name']}</td>
                        <td>{$teacher['subject_id']}</td>
                        <td>
                            <a href='edit_teacher.php?id={$teacher['id']}'>Edit</a>
                            <a href='delete_teacher.php?id={$teacher['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html> 