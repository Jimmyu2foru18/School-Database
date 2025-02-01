const studentModel = require('../models/studentModel');

const registerStudent = (req, res) => {
    const student = req.body;
    studentModel.addStudent(student, (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(201).json({ message: 'Student registered successfully' });
    });
};

const updateStudentProfile = (req, res) => {
    const studentId = req.body.student_id;
    const student = req.body;
    studentModel.updateStudent(studentId, student, (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(200).json({ message: 'Profile updated successfully' });
    });
};

const getStudentCourses = (req, res) => {
    const studentId = req.params.student_id;
    studentModel.getStudentCourses(studentId, (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(200).json(results);
    });
};

module.exports = { registerStudent, updateStudentProfile, getStudentCourses };
