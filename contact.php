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
        
        
        </div>
        </section>

    <section class="OurContact">
        <h1>Access your new home from anywhere across the country</h1>
        <a href="home.php" class="hero-btn">Contact Us</a>

    </section>
    <section class="footer">
        <h4>About Us</h4>
        <p>This Is A Government Platform Where Its Citizen Get to Access Their Dream Homes</p>
        <div class="icons">
            <i class="fa-brands fa-facebook"></i> 
            <i class="fa-brands fa-instagram"></i> 
            <i class="fa-brands fa-twitter" ></i>

        </div>
    </section>
    
 </body>
</html>