<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Classes</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Manage Classes</h1>
    <a href="create_class.php">Add New Class</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Grade Level</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once '../../config/database.php';
            require_once '../../models/ClassModel.php';

            $database = new Database();
            $db = $database->getConnection();
            $classModel = new ClassModel($db);
            $classes = $classModel->readAll(); // Implement readAll method in ClassModel

            foreach ($classes as $class) {
                echo "<tr>
                        <td>{$class['id']}</td>
                        <td>{$class['name']}</td>
                        <td>{$class['grade_level']}</td>
                        <td>
                            <a href='edit_class.php?id={$class['id']}'>Edit</a>
                            <a href='delete_class.php?id={$class['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html> 