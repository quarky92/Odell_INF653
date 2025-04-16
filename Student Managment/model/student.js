const mongoose = require('mongoose');

const student_schema = new mongoose.Schema(
    {
        firstName: { type: String, required: true },
        lastName: { type: String, required: true },
        email: { type: String, required: true, unique: true },
        enrolledDate: { type: Date, required: true, default: Date.now() }
    }
)

module.exports = mongoose.model("Student", student_schema);