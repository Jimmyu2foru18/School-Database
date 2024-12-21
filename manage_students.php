<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Students</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Manage Students</h1>
    <?php if (isset($_GET['message'])): ?>
        <div class="alert alert-success"><?php echo $_GET['message']; ?></div>
    <?php endif; ?>
    <a href="create_student.php">Add New Student</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch students from the database
            require_once '../../config/database.php';
            require_once '../../models/Student.php';

            $database = new Database();
            $db = $database->getConnection();
            $studentModel = new Student($db);
            $students = $studentModel->readAll(); // Implement readAll method in Student model

            foreach ($students as $student) {
                echo "<tr>
                        <td>{$student['id']}</td>
                        <td>{$student['first_name']} {$student['last_name']}</td>
                        <td>{$student['class_id']}</td>
                        <td>
                            <a href='edit_student.php?id={$student['id']}'>Edit</a>
                            <a href='delete_student.php?id={$student['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html> 