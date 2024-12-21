<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Subjects</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Manage Subjects</h1>
    <a href="create_subject.php">Add New Subject</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            require_once '../../models/Subject.php';

            $database = new Database();
            $db = $database->getConnection();
            $subjectModel = new Subject($db);
            $subjects = $subjectModel->readAll(); // Implement readAll method in Subject model

            foreach ($subjects as $subject) {
                echo "<tr>
                        <td>{$subject['id']}</td>
                        <td>{$subject['name']}</td>
                        <td>{$subject['description']}</td>
                        <td>
                            <a href='edit_subject.php?id={$subject['id']}'>Edit</a>
                            <a href='delete_subject.php?id={$subject['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html> 