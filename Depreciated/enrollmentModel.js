const db = require('../config/db');

const enrollStudent = (studentId, courseId, callback) => {
    const query = 'INSERT INTO Enrollments (student_id, course_id, enrollment_date) VALUES (?, ?, CURDATE())';
    db.query(query, [studentId, courseId], callback);
};

module.exports = { enrollStudent };
