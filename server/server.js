// packages needed for node.js to connect
const mysql = require('mysql');
// stuff for connecting to javasccript front end
const prompt = require('prompt-sync');
const express = require('express');
const cors = require('cors');

// express creates express application
const app = express();
// allow cross-origin requests. idk what that means
app.use(cors());
// parse incoming requests with JSON
app.use(express.json());

// creates a GET route
// two arguments: path of endpoint which is just /
// callback which can be middleware function or series/array 
// of middleware functions
app.get('/', (req, res) => {
getMessageFromDB(req, res)
});

// getting query from json made on Quotes.jsx
function getMessageFromDB(req, res){
  const sql = req.query.value;
  con.query(sql, function(err, result) {
    if (err) throw err;
    res.json({ message: result });
  });
}

// this part actually connects to database
// sql needs to be connected to front end
// above code works for javascript front end
// creates a connection to database using username and password
var con = mysql.createConnection({
				host: "localhost",
				user: "root",
				password: "password",
				database: "cardealership"
});

// starts server
app.listen(8000, () => {
  console.log('server running on port 8000');
});
