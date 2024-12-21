<?php
require_once '../config/database.php';
require_once '../models/User.php';
require_once '../controllers/AuthController.php';

// Initialize database and models/controllers
$database = new Database();
$db = $database->getConnection();
$userModel = new User($db);
$authController = new AuthController($userModel);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>School Management System</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <h1>Welcome to the School Management System</h1>
    <nav>
        <ul>
            <li><a href="views/auth/login.php">Login</a></li>
            <li><a href="views/auth/register.php">Register</a></li>
        </ul>
    </nav>
</body>
</html> 