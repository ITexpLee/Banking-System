<?php

//Connect to Database

include 'connection.php';

//fetch component from component.php

require 'component.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!--Bootstrap4 CDN-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--Css file-->
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
</head>

<body>
    <div id="successmessage" class="alert alert-success"></div>
    <div class="container text-center">
        <div class="card-deck">
            <?php

            //Get Receivers from Database

            if (isset($_POST['transfer'])) {

                //Get senders info
                $sender_id = $_POST['sender_id'];
                $sender_balance = $_POST['balance'];
                $amount = $_POST['amount'];

                //Print all possible Receivers

                $sql = "SELECT * FROM customers WHERE cust_id != '$sender_id'";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo "<div class='alert alert-danger'>There was error fetching product Data<div>";
                }
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        Receivers($row['first_name'], $row['last_name'], $row['account_no'], $row['balance'], $row['cust_id'], $sender_id, $sender_balance, $amount);
                    }
                }
            }


            //Transaction Code
            if (isset($_POST['receive'])) {

                //Get senders info
                $sender_id = $_POST['sender_id'];
                $sender_balance = $_POST['sender_balance'];
                $amount = $_POST['amount'];

                //Get Receivers Info

                $receiver_id = $_POST['receiver_id'];
                $receiver_balance = $_POST['balance1'];

                //New Balance of Sender 
                if (!($sender_balance > $amount)) {
                    echo "<div class='alert alert-danger'> The transaction could not be completed due to lack of Amount</div>";
                    exit();
                }

                $sender_new_balance = $sender_balance - $amount;
                $receiver_new_balance = $receiver_balance + $amount;

                //Update Senders Row in Customers Table

                $sql = "UPDATE customers SET balance ='$sender_new_balance' WHERE cust_id='$sender_id'";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo "<div class='alert alert-danger'> There was some error updating amount in senders</div>";
                    exit();
                }

                //Update Receivers Row in Customers Table

                $sql = "UPDATE customers SET balance ='$receiver_new_balance' WHERE cust_id='$receiver_id'";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo "<div class='alert alert-danger'> There was some error updating amount in senders</div>";
                    exit();
                }

                //Insert Transaction into the transaction Table

                echo "<div class='alert alert-success mx-auto'>Transaction of $amount done successfully. Please wait while the page is Redirected :)</div>";
                header("refresh:5;url=http://localhost/My%20Projects/Banking-System/index.php");
            }


            ?>
        </div>
    </div>
    <!--Script files-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- Dev Script file -->
    <script src="script.js"></script>
</body>

</html>