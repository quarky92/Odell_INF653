
const mongoose = require('mongoose');
const student = require('../model/student');

const create_student = async (req, res) =>
{
    const { firstName, lastName, email, enrolledDate } = req.body;
    if (!firstName || !lastName || !email || !enrolledDate)
    {
        return res.status(400).json({ message: "You are missing required data!" });
    }

    try
    {
        const students = await student.create(
            {
                firstName: firstName,
                lastName: lastName,
                email: email,
                enrolledDate: enrolledDate
            }
        )
        res.status(201).json(students);
    }
    catch (err)
    {
        res.status(500).json({ message: err.message });
    }

}


const get_students = async (req, res) =>
{
    try
    {
        const students = await student.find();
        if (students.length == 0)
        {
            return res.status(404).json({ message: "No students found!" });
        }
        res.json(students);
    }
    catch (err)
    {
        res.status(500).json({ message: err.message });
    }
}

const get_student = async (req, res) =>
{
    const { id } = req.params;
    if (!id)
        return res.status(400).json({ message: "student Id is needed!" });

    try
    {
        const s = await student.findById(id).exec();
        if (!s)
            return res.status(404).json({ message: "student not found!" });

        res.json(s);
    }
    catch (err)
    {
        res.status(500).json({ message: err.message });
    }
}

const update_student = async (req, res) => 
{
    const { id, firstName, lastName, email, enrolledDate } = req.body;

    if (!id)
        return res.status(400).json({ message: "No student ID!" });

    try
    {
        const s = await student.findById(id).exec();
        if (!s)
            return res.status(404).json({ message: "No student found!" });

        if (firstName) s.firstName = firstName;
        if (lastName) s.lastName = lastName;
        if (email) s.email = email;
        if (enrolledDate) s.enrolledDate = enrolledDate;

        const data = await s.save();
        res.json(data);
    } catch (err)
    {
        res.status(500).json({ message: err.message });
    }
}

const delete_student = async (req, res) =>
{
    const { id } = req.body;
    if (!id)
        return res.status(400).json({ message: "Need an ID" });

    try
    {
        const s = await student.findById(id).exec();
        if (!s)
            return res.status(404).json({ message: "Student not found!" });

        const data = await student.deleteOne({ _id: id });
        res.json({ message: "student deleted", data });
    } catch (err)
    {
        res.status(500).json({ message: err.message });
    }
}

module.exports = {
    create_student,
    get_students,
    get_student,
    update_student,
    delete_student
}