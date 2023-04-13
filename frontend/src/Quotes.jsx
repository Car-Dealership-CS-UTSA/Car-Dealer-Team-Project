import React, {useState} from "react";
import axios from "axios";

function CarComponent({ car }) {
  return (
    <div key={car.record_number}>
      <h2>Record Number: {car.record_number}</h2>
      <p>Price: {car.price}</p>
      <p>Company: {car.company}</p>
      <p>Model: {car.model}</p>
      <p>Year: {car.year}</p>
      <p>Mileage: {car.mileage}</p>
      <p>Color: {car.color}</p>
      <p>State: {car.state}</p>
    </div>
  );
}
function Quotes() {
  const [text, setText] = useState([]);

// requesting that get defined in server.js
function getText() {
  axios.get("http://localhost:8000/", { 
    crossdomain: true,
    params: {
      value: "select * from car_record"
    }
  }).then(response => {
    // setting text with setText
    setText(response.data.message);
  });
}

return (
    <div>
      <button onClick={getText}>
        hello
      </button>
      {text.length > 0 ? (
        <CarComponent car={text} />
      ) : (
        <p>No cars to display</p>
      )}
    </div>
  )
}

export default Quotes;
