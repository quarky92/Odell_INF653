const express = require('express');
const router = express.Router();
const students = require('../controllers/student_controller');

router.route('/')
    .get(students.get_students)
    .post(students.create_student)
    .put(students.update_student)
    .delete(students.delete_student);

router.route('/:id').get(students.get_student);

module.exports = router;