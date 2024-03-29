<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catalog</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="app.css" />
  </head>

  <body>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <!-- Start of navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d1b2a;">
        <div class="container-fluid" id="navbar">
            <!-- clickable home icon (start) -->
            <a class="navbar-brand" href="index.php"> <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
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
                    <?php
                    if(!isset($_SESSION['valid']) || !$_SESSION['valid']){
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="CreateAccount.php">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="LogIn.php">LOG IN</a>
                    </li>
                    <?php
                    }
                    else{
                        ?>
                         <li class="nav-item">
                        <a class="nav-link" href="LogOut.php">LOG OUT</a>
                    </li>
                        <?php
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catalog.php">CATALOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nearby.php">SEARCH NEARBY</a>
                    </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ShoppingCart.php">CHECKOUT</a>
                </li>
                <?php
                    if(isset($_SESSION['valid']) && $_SESSION['valid'] && $_SESSION['username'] =='admin' && $_SESSION['password'] =='admin'){
                        ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Admin.php">ADMIN</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <h1 style="text-align: center;">Catalog</h1>

    <form action="">
      <div class="main">
        <div class="left">
          <div class="innerLeft">
            <label for="carMake">Make:</label>
            <select id="carMake" name="carMake">
              <option value="BMW">BMW</option>
              <option value="Mercedes-Benz">Mercedes-Benz</option>
              <option value="Audi">Audi</option>
              <option value="Toyota">Toyota</option>
              <option value="Renault">Renault</option>
              <option value="Volkswagen">Volkswagen</option>
              <option value="Mitsubishi">Mitsubishi</option>
            </select>
          </div>
          <div class="innerLeft">
            <label for="carType">Type:</label>
            <select id="carType" name="carType">
              <option value="Sedan">Sedan</option>
              <option value="Van">Van</option>
              <option value="Crossover">Crossover</option>
              <option value="Vagon">Vagon</option>
              <option value="Hatch">Hatch</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="innerLeft">
            <label for="engine">Engine Type:</label>
            <select id="engine" name="engine">
              <option value="Petrol">Petrol</option>
              <option value="Diesel">Diesel</option>
              <option value="Gas">Gas</option>
              <option value="Other">Other</option>
            </select>
          </div>
          <div class="innerLeft">
            <label for="minYear">Min. Year</label>
            <select id="minYear" name="minYear">
              <option label="1977" value="1977">1977</option>
              <option label="1978" value="1978">1978</option>
              <option label="1979" value="1979">1979</option>
              <option label="1980" value="1980">1980</option>
              <option label="1981" value="1981">1981</option>
              <option label="1982" value="1982">1982</option>
              <option label="1983" value="1983">1983</option>
              <option label="1984" value="1984">1984</option>
              <option label="1985" value="1985">1985</option>
              <option label="1986" value="1986">1986</option>
              <option label="1987" value="1987">1987</option>
              <option label="1988" value="1988">1988</option>
              <option label="1989" value="1989">1989</option>
              <option label="1990" value="1990">1990</option>
              <option label="1991" value="1991">1991</option>
              <option label="1992" value="1992">1992</option>
              <option label="1993" value="1993">1993</option>
              <option label="1994" value="1994">1994</option>
              <option label="1995" value="1995">1995</option>
              <option label="1996" value="1996">1996</option>
              <option label="1997" value="1997">1997</option>
              <option label="1998" value="1998">1998</option>
              <option label="1999" value="1999">1999</option>
              <option label="2000" value="2000">2000</option>
              <option label="2001" value="2001">2001</option>
              <option label="2002" value="2002">2002</option>
              <option label="2003" value="2003">2003</option>
              <option label="2004" value="2004">2004</option>
              <option label="2005" value="2005">2005</option>
              <option label="2006" value="2006">2006</option>
              <option label="2007" value="2007">2007</option>
              <option label="2008" value="2008">2008</option>
              <option label="2009" value="2009">2009</option>
              <option label="2010" value="2010">2010</option>
              <option label="2011" value="2011">2011</option>
              <option label="2012" value="2012">2012</option>
              <option label="2013" value="2013">2013</option>
              <option label="2014" value="2014">2014</option>
              <option label="2015" value="2015">2015</option>
              <option label="2016" value="2016">2016</option>
            </select>

            <label for="maxYear">Max. Year</label>
            <select id="maxYear" name="maxYear">
              <option label="1977" value="1977">1977</option>
              <option label="1978" value="1978">1978</option>
              <option label="1979" value="1979">1979</option>
              <option label="1980" value="1980">1980</option>
              <option label="1981" value="1981">1981</option>
              <option label="1982" value="1982">1982</option>
              <option label="1983" value="1983">1983</option>
              <option label="1984" value="1984">1984</option>
              <option label="1985" value="1985">1985</option>
              <option label="1986" value="1986">1986</option>
              <option label="1987" value="1987">1987</option>
              <option label="1988" value="1988">1988</option>
              <option label="1989" value="1989">1989</option>
              <option label="1990" value="1990">1990</option>
              <option label="1991" value="1991">1991</option>
              <option label="1992" value="1992">1992</option>
              <option label="1993" value="1993">1993</option>
              <option label="1994" value="1994">1994</option>
              <option label="1995" value="1995">1995</option>
              <option label="1996" value="1996">1996</option>
              <option label="1997" value="1997">1997</option>
              <option label="1998" value="1998">1998</option>
              <option label="1999" value="1999">1999</option>
              <option label="2000" value="2000">2000</option>
              <option label="2001" value="2001">2001</option>
              <option label="2002" value="2002">2002</option>
              <option label="2003" value="2003">2003</option>
              <option label="2004" value="2004">2004</option>
              <option label="2005" value="2005">2005</option>
              <option label="2006" value="2006">2006</option>
              <option label="2007" value="2007">2007</option>
              <option label="2008" value="2008">2008</option>
              <option label="2009" value="2009">2009</option>
              <option label="2010" value="2010">2010</option>
              <option label="2011" value="2011">2011</option>
              <option label="2012" value="2012">2012</option>
              <option label="2013" value="2013">2013</option>
              <option label="2014" value="2014">2014</option>
              <option label="2015" value="2015">2015</option>
              <option label="2016" value="2016">2016</option>
            </select>
          </div>
          <div class="innerLeft">
            <label for="minMile"> Min. Mileage:</label>
            <input type="number" id="minMile" value="0" name="minMile" />
            <label for="maxMile"> Max. Mileage:</label>
            <input type="number" id="maxMile" value="1000" name="maxMile"/>
          </div>
          <div class="innerLeft">
            <label for="minPrice">Min. Price:</label>
            <input value="600" type="number" id="minPrice" name="minPrice"/><br /><br />
            <label for="maxPrice">Max. Price:</label>
            <input value="300000" type="number" id="maxPrice" name="maxPrice" />
          </div>
          <div class="innerLeft">
            <input type="submit" value="Submit">
          </div>
        </div>
        
    </form>
    <!--Place Database Output Here-->
    <div class="right"></div>
        </div>
    
  </body>
</html>