<?php
class TimetableController {
    private $timetableModel;

    public function __construct($timetableModel) {
        $this->timetableModel = $timetableModel;
    }

    public function createTimetable($class_id, $subject_id, $day, $start_time, $end_time) {
        return $this->timetableModel->createTimetable($class_id, $subject_id, $day, $start_time, $end_time);
    }

    public function getTimetable($class_id) {
        return $this->timetableModel->getTimetable($class_id);
    }
}
?> 