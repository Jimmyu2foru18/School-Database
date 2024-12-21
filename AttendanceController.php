<?php
class AttendanceController {
    private $attendanceModel;

    public function __construct($attendanceModel) {
        $this->attendanceModel = $attendanceModel;
    }

    public function markAttendance($student_id, $date, $status) {
        return $this->attendanceModel->markAttendance($student_id, $date, $status);
    }

    public function getAttendance($student_id) {
        return $this->attendanceModel->getAttendance($student_id);
    }
}
?> 