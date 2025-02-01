const courseModel = require('../models/courseModel');

const getCourses = (req, res) => {
    courseModel.getCourses((err, results) => {
        if (err) return res.status(500).json({ error: err.message });
        res.status(200).json(results);
    });
};

module.exports = { getCourses };
