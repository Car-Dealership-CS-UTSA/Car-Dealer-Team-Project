import React, {useState} from "react";
import axios from "axios";

function Quotes() {
  const [text, setText] = useState("");

// requesting that get defined in server.js
function getText() {
  axios.get("http://localhost:5000/", { crossdomain: true
  }).then(response => {
    // setting text with setText
    setText(response.data.text);
  });
}

return (
    <div>
      <button onClick={getText}>
        hello
      </button>
      <h1>{text}</h1>
    </div>
  )
}

export default Quotes;
