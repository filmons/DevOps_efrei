const express = require('express');
const app = express();
const port = 9000; // Change the port number if needed

app.get('/admin', (req, res) => {
  res.send('Hello Admin!');
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});