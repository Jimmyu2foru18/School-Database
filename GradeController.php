<?php
class GradeController {
    private $gradeModel;

    public function __construct($gradeModel) {
        $this->gradeModel = $gradeModel;
    }

    public function addGrade($student_id, $subject_id, $grade, $remarks) {
        return $this->gradeModel->addGrade($student_id, $subject_id, $grade, $remarks);
    }

    public function getGrades($student_id) {
        return $this->gradeModel->getGrades($student_id);
    }
}
?> 