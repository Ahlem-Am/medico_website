// index.js

const express = require('express');
const app = express();
const cors = require('cors');

require('dotenv').config();
const PORT = process.env.PORT || 4000;

app.use(express.json());
app.use(cors());

const router = require('./routes/router.js');
const bodyParser = require('body-parser');
app.use(bodyParser.urlencoded({extended:true}))
app.use('/api', router);

app.listen(PORT, () => console.log(`Server running on port ${PORT}`));