<?php
class StudentController {
    private $studentModel;

    public function __construct($studentModel) {
        $this->studentModel = $studentModel;
    }

    public function createStudent($user_id, $first_name, $last_name, $dob, $gender, $address, $class_id) {
        return $this->studentModel->create($user_id, $first_name, $last_name, $dob, $gender, $address, $class_id);
    }

    public function getStudent($id) {
        return $this->studentModel->read($id);
    }

    public function updateStudent($id, $first_name, $last_name, $dob, $gender, $address, $class_id) {
        return $this->studentModel->update($id, $first_name, $last_name, $dob, $gender, $address, $class_id);
    }

    public function deleteStudent($id) {
        return $this->studentModel->delete($id);
    }
}
?> 