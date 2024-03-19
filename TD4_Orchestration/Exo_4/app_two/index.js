const express = require('express');
const app = express();
const port = 8000; // Change the port number if needed

app.get('/client', (req, res) => {
  res.send('Hello Client!');
});

app.listen(port, () => {
  console.log(`Server is running on port ${port}`);
});