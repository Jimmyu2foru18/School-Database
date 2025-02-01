const db = require('../config/db');

const addStudent = (student, callback) => {
    const query = 'INSERT INTO Students (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)';
    db.query(query, [student.first_name, student.last_name, student.email, student.phone], callback);
};

const updateStudent = (studentId, student, callback) => {
    const query = 'UPDATE Students SET first_name = ?, last_name = ?, email = ?, phone = ? WHERE student_id = ?';
    db.query(query, [student.first_name, student.last_name, student.email, student.phone, studentId], callback);
};

const getStudentCourses = (studentId, callback) => {
    const query = `
        SELECT Courses.course_name, Courses.description, Courses.credits 
        FROM Enrollments
        JOIN Courses ON Enrollments.course_id = Courses.course_id
        WHERE Enrollments.student_id = ?
    `;
    db.query(query, [studentId], callback);
};

module.exports = { addStudent, updateStudent, getStudentCourses };
