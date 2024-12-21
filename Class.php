<?php
class ClassModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($name, $grade_level, $teacher_id) {
        $query = "INSERT INTO classes (name, grade_level, teacher_id) VALUES (:name, :grade_level, :teacher_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':grade_level', $grade_level);
        $stmt->bindParam(':teacher_id', $teacher_id);
        return $stmt->execute();
    }

    public function read($id) {
        $query = "SELECT * FROM classes WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $name, $grade_level, $teacher_id) {
        $query = "UPDATE classes SET name = :name, grade_level = :grade_level, teacher_id = :teacher_id WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':grade_level', $grade_level);
        $stmt->bindParam(':teacher_id', $teacher_id);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM classes WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?> 