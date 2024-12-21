<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Add New Student</h1>
    <form action="create_student_process.php" method="POST">
        <input type="text" name="first_name" placeholder="First Name" required>
        <input type="text" name="last_name" placeholder="Last Name" required>
        <input type="date" name="dob" placeholder="Date of Birth" required>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="text" name="address" placeholder="Address" required>
        <input type="number" name="class_id" placeholder="Class ID" required>
        <button type="submit">Add Student</button>
    </form>
</body>
</html> 