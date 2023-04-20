<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Nearby</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <!-- Start of navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d1b2a;">
        <div class="container-fluid" id="navbar">
            <!-- clickable home icon (start) -->
            <a class="navbar-brand" href="index.html"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                    fill="white" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                    <path
                        d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                </svg></a>
            <!-- clickable home icon (end) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.html">CATALOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nearby.php">SEARCH NEARBY</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <h1>Choose Category: </h1>
    <!--<div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Select
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#">BMW</a>
            <a class="dropdown-item" href="#">Chevrolet</a>
            <a class="dropdown-item" href="#">Ford</a>
            <a class="dropdown-item" href="#">Hyundai</a>
            <a class="dropdown-item" href="#">Mahindra</a>
            <a class="dropdown-item" href="#">Toyota</a>
        </div>
    </div>-->
    <br>

    <form method="post" action="nearby.php">
            <select name="category" id="category">
            <option value="">Select</option>
            <option value="BMW">BMW</option>
            <option value="Chevrolet">Chevrolet</option>
            <option value="Ford">Ford</option>
            <option value="Hyundai">Hyundai</option>
            <option value="Mahindra">Mahindra</option>
            <option value="Toyota">Toyota</option>
        </select>
        <input type="submit" value="Search" name="submit" id="submit">
    </form>
    <div id="results">
        <table class="table result table-bordered">
            <!--<table>-->
    <?php
    if(isset($_POST["category"])){
        include "connect.php";
        $category=$_POST["category"];  
    // Execute a SELECT query
        $sql = "SELECT record_number, company, model, year, price, mileage, color, state FROM car_record WHERE company LIKE '$category'";
        $result = $conn->query($sql);

    // Check if there are any rows
        if ($result->num_rows > 0) {
            echo "<thead>";
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
            echo "</thead>";
    // Loop through each row and output the data
         while($row = $result->fetch_assoc()) {
             //echo "ID: " . $row["record_number"] . " - Company: " . $row["company"] . " - Model: " . $row["model"] . "Year: " . $row["year"] . "Price: " . $row["price"] 
             // . "Miles Driven: " . $row["mileage"] . "Color: " . $row["color"] . "<br>" . "State";
              echo "<tr>";
              echo "<td style='color:#0000ff'>".$row['record_number']."</td>";
              echo "<td style='color:#0000ff'>".$row['company']."</td>";
              echo "<td style='color:#0000ff'>".$row['model']."</td>";
              echo "<td style='color:#0000ff'>".$row['year']."</td>";
              echo "<td style='color:#0000ff'>".$row['price']."</td>";
              echo "<td style='color:#0000ff'>".$row['mileage']."</td>";
              echo "<td style='color:#0000ff'>".$row['color']."</td>";
              echo "<td style='color:#0000ff'>".$row['state']."</td>";
              echo "</tr>";
         }
         
        } else {
         echo "No results found";
        }

// Close connection
$conn->close();
    }
    ?>
    </table>
    </div>
    <!-- start footer -->
    <div id="footer" class="container">
        <footer class="d-flex  justify-content-between align-items-center py-3 my-4 border-top">
            <ul class="nav col-md-8 ">
                <li class="nav-item"><a href="#" class="nav-link px-6 text-muted ">Footer Text</a></li>
            </ul>
        </footer>
    </div>
</body>

</html>
