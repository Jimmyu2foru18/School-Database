const db = require('../config/db');

const getCourses = (callback) => {
    const query = 'SELECT * FROM Courses';
    db.query(query, callback);
};

module.exports = { getCourses };
