const express = require('express');
const router = express.Router();
const studentController = require('../controllers/studentController');

router.post('/register', studentController.registerStudent);
router.post('/update-profile', studentController.updateStudentProfile);
router.get('/student-courses/:student_id', studentController.getStudentCourses);

module.exports = router;
