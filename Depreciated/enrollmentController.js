const enrollmentModel = require('../models/enrollmentModel');

const enrollStudent = (req, res) => {
    const { student_id, course_id } = req.body;
    enrollmentModel.enrollStudent(student_id, course_id, (err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(201).json({ message: 'Enrollment successful' });
    });
};

module.exports = { enrollStudent };
