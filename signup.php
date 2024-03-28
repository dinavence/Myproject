<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="container">
    <div class="signup-box">
        <h1>Sign Up</h1>
        
        <?php
        include("php/connect.php");

        // Check if the form is submitted
        if(isset($_POST['submit'])){
            // Retrieve form data
            $firstname = $_POST['First_name'];
            $lastname = $_POST['Last_name'];
            $idnumber = $_POST['Id_number'];
            $location = $_POST['Location'];
            $password = $_POST['Password'];
            $confirmpassword = $_POST['confirm_password'];

            // Verify if ID number already exists
            $verify_query = mysqli_query($con, "SELECT Id_number FROM tenants WHERE Id_number='$idnumber'");
            if(mysqli_num_rows($verify_query) != 0){
                echo "<div class='message'>
                        <p>The id number exists, try another one</p>
                      </div> <br>";
                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            } 
            else {
                // Insert user data into the database
                $insert_query = mysqli_query($con, "INSERT INTO tenants (first_name, last_name, Id_number, location, password, confirm_password) VALUES ('$firstname','$lastname','$idnumber','$location','$password','$confirmpassword')") or die("Error occurred");
                
                if($insert_query) {
                    echo "<div class='message'>
                            <p>Registration Successful!</p>
                          </div> <br>";
                    echo "<a href='login.php'><button class='btn'>Login Now</button>";
                } 
                else {
                    echo "<div class='message'>
                            <p>Error occurred while registering. Please try again later.</p>
                          </div> <br>";
                }
            }
        }
        else{
        ?>
        <form action="signup.php" method="post">
            <label for="firstname">First Name</label>
            <input type="text" placeholder="eg John" name="First_name"  id="first_name" required>
            <label for="lastname">Last Name</label>
            <input type="text" placeholder="eg Waithera" name="Last_name" id="last_name" required>
            <label for="idnumber">Id Number</label>
            <input type="text" placeholder="eg 123456" name="Id_number" id="id_number" maxlength="10" required>
            <label for="location">Location</label>
            <input type="text" placeholder="eg Nairobi" name="Location" id="location" required>
            <label for="password">Password</label>
            <input type="password" placeholder="enter a password" name="Password" id="password" maxlength="8" required>
            <label for="confirmpassword">confirm Password</label>
            <input type="password" placeholder="confirm password" name="confirm_password" id="confirm_password" maxlength="8" required>
            <input type="checkbox"id="showPassword" onchange="togglePasswordVisibility()">show password
            <input type="submit" name="submit" value="SUBMIT">
        
        </form>
    </div>
        </div>
    <?php } ?>
    <p>Already have an account?<a href="login.php">LOG IN</a></p>
    <p>I am an Admin <a href="Admin.php">SIGN UP</a><p>
    
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var showPasswordCheckbox = document.getElementById("showPassword");

            if (showPasswordCheckbox.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>
</body>
</html>
