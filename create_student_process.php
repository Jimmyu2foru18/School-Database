<?php
require_once '../../config/database.php';
require_once '../../models/Student.php';

$database = new Database();
$db = $database->getConnection();
$studentModel = new Student($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $class_id = $_POST['class_id'];

    if ($studentModel->create($user_id, $first_name, $last_name, $dob, $gender, $address, $class_id)) {
        header("Location: manage_students.php?message=Student added successfully");
    } else {
        echo "Error adding student.";
    }
}
?> 