const express = require('express');
const mongoose = require('mongoose');
const cors = require('cors');
const app = express();

app.use(cors());
app.use(express.json());

// MongoDB connection
mongoose.connect('your_mongo_db_connection_string', {
    useNewUrlParser: true,
    useUnifiedTopology: true,
})
.then(() => console.log('MongoDB connected'))
.catch((error) => console.error(error));

// Routes
const authRoutes = require('./routes/auth');
app.use('/auth', authRoutes);

const PORT = 5000;
app.listen(PORT, () => {console.log('Server running on port ,${PORT}');});





