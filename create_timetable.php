<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Timetable Entry</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <h1>Add New Timetable Entry</h1>
    <form action="create_timetable_process.php" method="POST">
        <input type="number" name="class_id" placeholder="Class ID" required>
        <input type="number" name="subject_id" placeholder="Subject ID" required>
        <input type="text" name="day" placeholder="Day" required>
        <input type="time" name="start_time" placeholder="Start Time" required>
        <input type="time" name="end_time" placeholder="End Time" required>
        <button type="submit">Add Timetable Entry</button>
    </form>
</body>
</html> 