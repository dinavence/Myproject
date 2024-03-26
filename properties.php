<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYHOUSE</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="header"> 
        <nav>
            <a href="home.php"><i class="fa-solid fa-house"></i><br>MyHouse</a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href ="">HOME</a></li>
                    <li><a href ="">PROPERTIES</a></li>
                    <li><a href ="">CONTACT</a></li>
                    <li><a href ="">ABOUT</a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
<div class="text-box">
    <h1>Our Home</h1>
    <p>Get your dream home now through our affordable housing project provided by the government</p>


</div>
    </section>

    <section class="properties">
        <h1>Properties for Sale</h1>
        <p>The properties listed here by the government are for sale at affordable prices</p>

        <div class="row">
        
            <div class="properties-col">
                <h3>5 Bedroom Apartment</h3>
                <p>The apartment is favourable to large families and are of good price</p>
            </div>
            <div class="properties-col">
                <h3>4 Bedroom Apartment</h3>
                <p>The apartment is favourable to large families and are of good price</p>
            </div>
            <div class="properties-col">
                <h3>3 Bedroom Apartment</h3>
                <p>The apartment is favourable to large families and are of good price</p>
            </div>
            <div class="properties-col">
                <h3>2 Bedroom Apartment</h3>
                <p>The apartment is favourable to large families and are of good price</p>
            </div>
        </div>
      
    </section>
   

    <section class="Location">
        <h1>Areas to rent</h1>
        <p>The website provides an overview of various government-sponsored housing programs available to citizens, including affordable housing initiatives, rental assistance programs, mortgage assistance, and housing grants.</p>

        <div class="row">
            <div class="Location-col">
             <img src="images/nairobi.jpg" alt="" width="100px" height="200px"  onclick="selectLocation()">
                <div class="layer">
                    <h3>NAIROBI</h3>
                </div>
            </div>
                <div class="Location-col">
                <img src="images/nakuru.jpg" alt="" width="100px" height="200px">
                <div class="layer">
                    <h3>NAKURU</h3>
                </div>
            </div>
                <div class="Location-col">
                <img src="images/mombasa.jpg"alt=""width="100px" height="200px">
                <div class="layer">
                    <h3>MOMBASA</h3>
                </div>
            </div>
                <div class="Location-col">
                <img src="images/kisumu.jpg"alt=""width="100px" height="200px">
                <div class="layer">
                    <h3>KISUMU</h3>
                </div>
            </div>
    </div> 
</section>
<section>
<div>
    <h1>Properties Table</h1>
  
    <table class=properties-table>
        <thead>
            <tr>
                <th>location</th>
                <th>house_number</th>
                <th>size</th>
                <th>price</th>
                
            </tr>
            
        </thead>
        <tbody>
    <?php
         include("php/connect.php"); 
            // Query to retrieve data
            $query = "SELECT * FROM properties";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['house_number'] . "</td>";
                    echo "<td>" . $row['size'] . "</td>";
                    echo "<td>" . $row['price'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
    ?>  
            </tbody>
    </table>
</div> 
<p>Proceed to pay<a href="paymentmodule.php"> PAY NOW</a></p>        
 </section>
    <section class="footer">
        <h4>About Us</h4>
        <p>This Is A Government Platform Where Its Citizen Get to Access Their Dream Homes.</p>
        <div class="icons">
            <i class="fa-brands fa-facebook"></i> 
            <i class="fa-brands fa-instagram"></i> 
            <i class="fa-brands fa-twitter" ></i>

        </div>
    </section>
    <script>
        function selectLocation(location) {
            window.location.href = "properties.php?location=" + location;
        }
    </script>
    
</body>
</html>