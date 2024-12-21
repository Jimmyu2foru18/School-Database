<?php
class Attendance {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function markAttendance($student_id, $date, $status) {
        $query = "INSERT INTO attendance (student_id, date, status) VALUES (:student_id, :date, :status)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':status', $status);
        return $stmt->execute();
    }

    public function getAttendance($student_id) {
        $query = "SELECT * FROM attendance WHERE student_id = :student_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?> 