<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROPERTY LIST</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup-box">
        <h1>UPDATE</h1>
        <?php
        include("php/connect.php");

        // Check if the form is submitted
        if(isset($_POST['submit'])){
            $location = $_POST['location'];
            $house_number = $_POST['house_number'];
            $size = $_POST['size'];
            $price = $_POST['price'];
    
            $verify_query = mysqli_query($con, "SELECT house_number FROM properties WHERE house_number='$house_number'");
            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                        <p>The house number exists, try another one</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            } 
            else {
                // Insert user data into the database
                $insert_query = mysqli_query($con, "INSERT INTO properties (location, house_number, size, price) VALUES ('$location','$house_number','$size','$price')") or die("Error occurred");
                
                if($insert_query) {
                    echo "<div class='message'>
                            <p>Update Successful!</p>
                          </div> <br>";
                    echo "<a href='properties.php'><button class='btn'>GO BACK</button>";
                } 
                else {
                    echo "<div class='message'>
                            <p>Error occurred while updating. Please try again later.</p>
                          </div> <br>";
                }
            }
        }
        else{

         ?>
        <form method="POST" action="propertyform.php">
            <label>location</label>
            <input type="text" placeholder="eg Nairobi" name="location" required>
            <label>house number</label>
            <input type="text" placeholder="eg 1234" name="house_number" maxlength="4" required>
            <label>size</label>
            <input type="text" placeholder="eg 3-bedroom" name="size" required>
            <label>price</label>
            <input type="text" placeholder="eg 5000" name="price" required>
            <input type="submit" name= "submit" value="SUBMIT">
        </form>
    </div>
    <?php } ?>
    
</body>
</html>