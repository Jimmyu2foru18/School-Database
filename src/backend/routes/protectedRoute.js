const express = require('express');
const router = express.Router();
const auth = require('../middleware/auth');
const User = require('../models/User');

// Example Protected Route for Admins
router.get('/admin-data', auth('admin'), (req, res) => {
  res.json({ data: 'Sensitive admin data.' });
});

// Example Protected Route for Teachers and Admins
router.get('/teacher-data', auth(['admin', 'teacher']), (req, res) => {
  res.json({ data: 'Data for teachers and admins.' });
});

module.exports = router; 