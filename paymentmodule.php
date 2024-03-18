<!DOCTYPE html>
<html>
<head>
    <title>Payment Module</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="card">
    <h2>Choose Payment Method:</h2>
    
    <?php
      include("php/connect.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if payment method is selected
        if (isset($_POST["payment_method"])) {
            $payment_method = $_POST["payment_method"];
          
            
            // Display payment module based on selected method
            switch ($payment_method) {
                case 'MPESA':
                    
                    echo "<h2>MPESA Payment Module</h2>
                    
                    <form action='paymentmodule.php' method='post'>
                    <label for='phone_number'>Phone Number:</label>
                    <input type='text' name='phone_number' id='phone_number' required><br><br>
                    <label for='house_number'>House Number:</label>
                    <input type='text' name='house_number' id='house_number' required><br><br>
                    <label for='amount'>Amount:</label>
                    <input type='text' name='amount' id='amount' required><br><br>
                    <input type='submit' value='Pay with MPESA'>
        
                </form>";

                if (isset($_POST['phone_number'], $_POST['house_number'], $_POST['amount'])) {
                    $phone_number = $_POST['phone_number'];
                    $house_number = $_POST['house_number'];
                    $amount = $_POST['amount'];

                    $verify_query = mysqli_query($con, "SELECT house_number FROM payment WHERE house_number='$house_number'");
                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class='message'>
                            <p>The house has been paid</p>
                          </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } 
                    else {
                        $insert_query = mysqli_query($con, "INSERT INTO payment (phone_number, house_number,amount, payment_method) VALUES ('$phone_number', '$house_number','$amount' 'MPESA')") or die("error occurred");

                        if ($insert_query) {
                            echo "<div class='message'>
                                <p>Payment Successful!</p>
                              </div> <br>";
                            echo "<a href='paymentmodule.php'><button class='btn'>GO BACK</button>";
                        } else {
                            echo "<div class='message'>
                                    <p>Error occurred while paying. Please try again later.</p>
                                  </div> <br>";
                        }
                    }
                }
                break;
                case 'credit_card':
                    echo "<h2>Credit Card Payment Module</h2>
                    
                    <form action='paymentmodule.php' method='post'>
                    <label for='account_number'>Account Number:</label>
                    <input type='text' name='account_number' id='account_number' required><br><br>
                    <label for='house_number'>House Number:</label>
                    <input type='text' name='house_number' id='house_number' required><br><br>
                    <label for='amount'>Amount:</label>
                    <input type='text' name='amount' id='amount' required><br><br>
                    <input type='submit' value='Pay with Credit Card'>
                    
                </form>";

                if (isset($_POST['account_number'], $_POST['house_number'],$_POST['amount'])) {
                    $account_number = $_POST['account_number'];
                    $house_number = $_POST['house_number'];
                    $amount = $_POST['amount'];

                    $verify_query = mysqli_query($con, "SELECT house_number FROM payment WHERE house_number='$house_number'");
                    if (mysqli_num_rows($verify_query) != 0) {
                        echo "<div class='message'>
                            <p>The house has been paid</p>
                          </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    } 
                    else {
                        $insert_query = mysqli_query($con, "INSERT INTO payment (account_number, house_number,amount, payment_method) VALUES ('$account_number','$house_number','$amount', 'Credit Card')") or die("error occurred");

                        if ($insert_query) {
                            echo "<div class='message'>
                                <p>Payment Successful!</p>
                              </div> <br>";
                            echo "<a href='paymentmodule.php'><button class='btn'>GO BACK</button>";
                        } else {
                            echo "<div class='message'>
                                    <p>Error occurred while paying. Please try again later.</p>
                                  </div> <br>";
                        }
                    }
                }
                
                 break;
            
                default:
                    echo "<h2>Error: Invalid Payment Method</h2>";
                    echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
            }
        } 

    }
    else{
    ?>
    <div class="card-payform">
    
        <form action="paymentmodule.php" method="post">
        <input type="radio" name="payment_method" value="MPESA"> MPESA
        <input type="radio" name="payment_method" value="credit_card"> Credit Card
        <input type="submit" value="Proceed to Payment">
    </form>
    </div>
  

    <?php } ?>
   
    </div>
   
</body>
</html>
