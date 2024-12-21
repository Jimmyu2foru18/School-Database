<?php
class TeacherController {
    private $teacherModel;

    public function __construct($teacherModel) {
        $this->teacherModel = $teacherModel;
    }

    public function createTeacher($user_id, $first_name, $last_name, $subject_id) {
        return $this->teacherModel->create($user_id, $first_name, $last_name, $subject_id);
    }

    public function getTeacher($id) {
        return $this->teacherModel->read($id);
    }

    public function updateTeacher($id, $first_name, $last_name, $subject_id) {
        return $this->teacherModel->update($id, $first_name, $last_name, $subject_id);
    }

    public function deleteTeacher($id) {
        return $this->teacherModel->delete($id);
    }
}
?> 