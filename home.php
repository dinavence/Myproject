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
            <a href="index.php"><i class="fa-solid fa-house"></i><br>MyHouse</a>
            <div class="nav-links" id="navLinks">
                <i class="fa-solid fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href ="home.php">HOME</a></li>
                    <li><a href ="properties.php">PROPERTIES</a></li>
                    <li><a href ="contact.php">CONTACT</a></li>
                    <li><a href ="about.php">ABOUT</a></li>
                </ul>

            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
<div class="text-box">
    <h1>Our Home</h1>
    <p>Get your dream home now through our affordable housing project provided by the government</p>
    <a href="signup.php" class="hero-btn">Sign Up To Know More</a>

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
                <img src="images/nairobi.jpg" alt="" width="100px" height="200px">
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

    <section class="OurContact">
        <h1>Access your new home from anywhere across the country</h1>
        <a href="./contact.html" class="hero-btn">CONTACT US</a>

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
    </body>
</html>
    
