const mongoose = require('mongoose');

const connectDB = async () =>
{
    try
    {
        console.log(process.env.db_uri);
        await mongoose.connect(process.env.db_uri, {});
        console.log("Connected to MongoDB");
    }
    catch (err)
    {
        console.error("Connection error: ", err);
    }
}

module.exports = connectDB;