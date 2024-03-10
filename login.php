<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="login-box">
        <h1>Log In</h1>
 
 <?php
    session_start(); // Start session to store user's login status

    include("php/connect.php"); // Include the file to establish database connection

    if(isset($_POST['id_number']) && isset($_POST['password'])){
    $idNumber = $_POST['id_number']; // Retrieve user input for id number
    $password = $_POST['password']; // Retrieve user input for password
    
    // Query to retrieve user data from the database
    $query = "SELECT * FROM tenants WHERE Id_number='$idNumber' AND password='$password'";
    $result = mysqli_query($con, $query);
    
    // Check if the query returns a matching user
    if(mysqli_num_rows($result) == 1){
        // User found, store user data in session and redirect to dashboard or desired page
        $_SESSION['logged_in'] = true;
        $_SESSION['user_data'] = mysqli_fetch_assoc($result);
        header("Location: home.php"); // Redirect to dashboard page
        exit();
    }
     else {
        // User not found, display error message
        echo "<div class='message'>
            <p>Invalid id number or password</p>
            </div> <br>";
        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
    }
} 
else{

?>

<form>
            <label>Id number</label>
            <input type="text" name="Id_number" id="Id_number" required>
            <label>Location</label>
            <input type="text" name="Location" id="Location" required>
            <label>Password</label>
            <input type="password" name="Password" id="Password" required> 
            <input type="submit"value="SUBMIT">
        </form>
    </div>
    <?php } ?>
    <p>Don't have an account?<a href="signup.php">Sign up</a></p>
    </body>
</html>