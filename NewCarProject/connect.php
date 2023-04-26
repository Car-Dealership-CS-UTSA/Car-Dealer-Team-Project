<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
</head>

    <?php

 
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "cardealership";

    // Create connection
         $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         }
        //echo "Connected successfully";
        /*$category=$_POST["category"];  
    // Execute a SELECT query
        $sql = "SELECT record_number, company, model, year, price, mileage, color, state FROM car_record WHERE company LIKE '$category'";
        $result = $conn->query($sql);

    // Check if there are any rows
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Company</th>";
            echo "<th>Model</th>";
            echo "<th>Year</th>";
            echo "<th>Price</th>";
            echo "<th>Miles Driven</th>";
            echo "<th>Color</th>";
            echo "<th>State</th>";
            echo "</tr>";
    // Loop through each row and output the data
         while($row = $result->fetch_assoc()) {
             //echo "ID: " . $row["record_number"] . " - Company: " . $row["company"] . " - Model: " . $row["model"] . "Year: " . $row["year"] . "Price: " . $row["price"] 
             // . "Miles Driven: " . $row["mileage"] . "Color: " . $row["color"] . "<br>" . "State";
              echo "<tr>";
              echo "<td>".$row['record_number']."</td>";
              echo "<td>".$row['company']."</td>";
              echo "<td>".$row['model']."</td>";
              echo "<td>".$row['year']."</td>";
              echo "<td>".$row['price']."</td>";
              echo "<td>".$row['mileage']."</td>";
              echo "<td>".$row['color']."</td>";
              echo "<td>".$row['state']."</td>";
              echo "</tr>";
         }
         echo "</table>";
        } else {
         echo "No results found";
        }

// Close connection
$conn->close(); */

    ?>
    
</html>






