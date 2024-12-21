<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mark Attendance</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Mark Attendance</h1>
    <form action="mark_attendance_process.php" method="POST">
        <input type="number" name="student_id" placeholder="Student ID" required>
        <input type="date" name="date" required>
        <select name="status" required>
            <option value="present">Present</option>
            <option value="absent">Absent</option>
        </select>
        <button type="submit">Mark Attendance</button>
    </form>
</body>
</html> 