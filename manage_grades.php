<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Grades</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Manage Grades</h1>
    <a href="add_grade.php">Add New Grade</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Subject ID</th>
                <th>Grade</th>
                <th>Remarks</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            require_once '../../models/Grade.php';

            $database = new Database();
            $db = $database->getConnection();
            $gradeModel = new Grade($db);
            $grades = $gradeModel->getAll(); // Implement getAll method in Grade model

            foreach ($grades as $grade) {
                echo "<tr>
                        <td>{$grade['id']}</td>
                        <td>{$grade['student_id']}</td>
                        <td>{$grade['subject_id']}</td>
                        <td>{$grade['grade']}</td>
                        <td>{$grade['remarks']}</td>
                        <td>
                            <a href='edit_grade.php?id={$grade['id']}'>Edit</a>
                            <a href='delete_grade.php?id={$grade['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html> 