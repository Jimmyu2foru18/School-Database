const express = require('express');
const cors = require('cors');
const dotenv = require('dotenv');
const mongoose = require('mongoose');
const authRoutes = require('./routes/auth');
const protectedRoutes = require('./routes/protectedRoute');
const logger = require('./utils/logger');

dotenv.config();

const app = express();
const PORT = process.env.PORT || 5000;

// Middleware
app.use(cors());
app.use(express.json());

// Database Connection
mongoose.connect(process.env.MONGODB_URI, {
  useNewUrlParser: true,
  useUnifiedTopology: true,
})
.then(() => logger.info('MongoDB connected'))
.catch(err => logger.error(err));

// Routes
app.get('/', (req, res) => {
  res.send('Comprehensive School Database System API');
});

app.use('/api/auth', authRoutes);
app.use('/api/protected', protectedRoutes);

// Start Server
app.listen(PORT, () => {
  logger.info(`Server is running on port ${PORT}`);
}); 