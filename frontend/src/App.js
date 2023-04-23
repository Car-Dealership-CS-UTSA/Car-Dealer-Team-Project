import React, {useState} from 'react';
import './App.css';
import axios from "axios"

function CarComponent({car}) {
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

function Cars() {
  const [cars, setCars] = useState([]);

function getCars() {
  axios.get("http://localhost:8000/", { 
    crossdomain: true,
    params: {
      value: "select * from car_record"
    }
  }).then(response => {
    // setting text with setText
    setCars(response.data.message);
  });
}

return (
  <div>
    {cars.length > 0 ? (
      cars.map(car => <CarComponent key={car.record_number} car={car} />)
    ) : (
      <p>No cars selected</p>
    )}
  </div>
)}

export default App;
