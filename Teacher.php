<?php
class Teacher {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create($user_id, $first_name, $last_name, $subject_id) {
        $query = "INSERT INTO teachers (user_id, first_name, last_name, subject_id) VALUES (:user_id, :first_name, :last_name, :subject_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':subject_id', $subject_id);
        return $stmt->execute();
    }

    public function read($id) {
        $query = "SELECT * FROM teachers WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $first_name, $last_name, $subject_id) {
        $query = "UPDATE teachers SET first_name = :first_name, last_name = :last_name, subject_id = :subject_id WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':subject_id', $subject_id);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $query = "DELETE FROM teachers WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?> 