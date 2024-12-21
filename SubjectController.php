<?php
class SubjectController {
    private $subjectModel;

    public function __construct($subjectModel) {
        $this->subjectModel = $subjectModel;
    }

    public function createSubject($name, $description) {
        return $this->subjectModel->create($name, $description);
    }

    public function getSubject($id) {
        return $this->subjectModel->read($id);
    }

    public function updateSubject($id, $name, $description) {
        return $this->subjectModel->update($id, $name, $description);
    }

    public function deleteSubject($id) {
        return $this->subjectModel->delete($id);
    }
}
?> 