require('dotenv').config();
//get express
const express = require('express');
//get express app
const app = express();

const mongoose = require('mongoose');

//get our DB connection
const connectDB = require('./dbConfig');

const PORT = 3000;

app.use(express.json());

app.use('/students', require('./routes/routing'));

//Connects to the database
connectDB();

mongoose.connection.once("open", () =>
{
    app.listen(PORT, () =>
    {
        console.log('server is live on localhost:', PORT);
    })
})


