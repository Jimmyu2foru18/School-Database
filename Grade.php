<?php
class Grade {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function addGrade($student_id, $subject_id, $grade, $remarks) {
        $query = "INSERT INTO grades (student_id, subject_id, grade, remarks) VALUES (:student_id, :subject_id, :grade, :remarks)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->bindParam(':subject_id', $subject_id);
        $stmt->bindParam(':grade', $grade);
        $stmt->bindParam(':remarks', $remarks);
        return $stmt->execute();
    }

    public function getGrades($student_id) {
        $query = "SELECT * FROM grades WHERE student_id = :student_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':student_id', $student_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?> 