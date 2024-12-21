<?php
class Timetable {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function createTimetable($class_id, $subject_id, $day, $start_time, $end_time) {
        $query = "INSERT INTO timetable (class_id, subject_id, day, start_time, end_time) VALUES (:class_id, :subject_id, :day, :start_time, :end_time)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':class_id', $class_id);
        $stmt->bindParam(':subject_id', $subject_id);
        $stmt->bindParam(':day', $day);
        $stmt->bindParam(':start_time', $start_time);
        $stmt->bindParam(':end_time', $end_time);
        return $stmt->execute();
    }

    public function getTimetable($class_id) {
        $query = "SELECT * FROM timetable WHERE class_id = :class_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':class_id', $class_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?> 