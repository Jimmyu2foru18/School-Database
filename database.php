<?php
$host = 'localhost';
$db_name = 'school_management_system';
$username = 'root'; // default XAMPP username
$password = ''; // default XAMPP password

try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?> 