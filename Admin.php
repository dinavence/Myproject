<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="Signup.css">
</head>
<body>
    <div class="signup-box">
        <h1> Admin Sign Up</h1>

        <?php
        include("php/connect.php");

        if(isset($_POST['submit'])){
            $firstname = $_POST['First_name'];
            $lastname = $_POST['Last_name'];
            $idnumber = $_POST['Id_number'];
            $password = $_POST['Password'];
            $confirmpasword= $_POST['Confirm_password'];
        
        //verify id number
        $verify_query = mysqli_query($con, "SELECT Id_number FROM admin WHERE Id_number='$idnumber'");
        if(mysqli_num_rows($verify_query) != 0){
            echo "<div class='message'>
                    <p>The id number exists, try another one</p>
                  </div> <br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
        } 
        else {
            // Insert user data into the database
            $insert_query = mysqli_query($con, "INSERT INTO admin (first_name, last_name, Id_number, password, Confirm_password) VALUES ('$firstname','$lastname','$idnumber','$password','$confirmpassword')") or die("Error occurred");
            
            if($insert_query) {
                echo "<div class='message'>
                        <p>Registration Successful!</p>
                      </div> <br>";
                echo "<a href='index.php'><button class='btn'>Login Now</button>";
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
    
        <form action="adminlogin.php" method="post">
            <label for="firstname">First Name</label>
            <input type="text" placeholder="eg John" name="First_name" id="First_name" required>
            <label for="last name">Last Name</label>
            <input type="text" placeholder="eg Waithera" name="Last_name" id="Last_name" required>
            <label for="id number">Id number</label>
            <input type="text" placeholder="eg 123456" name="Id_number" id="Id_number" maxlength="10" required>
            <label for="password">Password</label>
            <input type="password" placeholder="enter a password" name="Password" id="Password" maxlength="8"required>
            <label for="confirm password">Confirm Password</label>
            <input type="password" placeholder="confirm password" name="Confirm_password" id="Confirm_password" maxlength="8">
            <input type="checkbox" id="showPassword" onchange="togglePasswordVisibility()">
            <input type="submit" name="submit" value="SUBMIT" required>
        </form>
    </div> 
<?php } ?>
        <p> Already have an account? <a href="adminlogin.php"> LOG IN </a></p>
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