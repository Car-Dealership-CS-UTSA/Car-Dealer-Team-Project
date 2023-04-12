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
// two arguments: path of endpoint which is just /message
// callback which can be middleware function or series/array 
// of middleware functions
// app.get('/message', (req, res) => {
//   // returning json object, so use res.json()
//   res.json({message: string});
// });
app.get('/', getMessageFromDB(req, res));

function getMessageFromDB(req, res){
  const sql = "select * from car_record";
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

// defunct first prototype
// con.connect(function(err) {
// 				// throws error if not connected
// 				if (err) throw err;
// 				console.log("connected!");
// 				// query database
// 				con.query(sql, function (err, result) {
// 								if (err) throw err;
// 								console.log("Result: " + result);
// 				});
// });

// starts server
app.listen(8000, () => {
  console.log('server running on port 8000');
});

// all of these are function calls
// trying to put equivalent in app.get
// con.connect(function(err) {
// 				if (err) throw err;
// 				// getting sql from command line
// 				// needs to be changed for ui
// 				var sql = prompt("what sql");
// 				// actually sending the sql code to server
// 				// not sure why fields is necessary, but it is
// 				con.query(sql, function(err, result, fields) {
// 								if (err) throw err;
// 								console.log(result);
// 				});
// 
// 				// closes connection after it's done
// 				con.end(function(err) {
// 								if (err) throw err;
// 								console.log("ending connection");
// 				});
// });
