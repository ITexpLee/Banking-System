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

<body onload="spinner()">

    <!--Loading Spinner-->
    <div id="loader">
        <div class="spinner-grow text-danger"></div><br>
        <div class="spinner-grow text-warning"></div><br>
        <div class="spinner-grow text-success"></div>
    </div>
    <div id="loadtext">Loading please Wait...</div>

    <!--Navigation Bar-->
    <header style="display: none;" id="head">
        <nav role="navigation" class="navbar navbar-expand-sm bg-dark navbar-dark py-0 animate-bottom" id="navbar">
            <!-- Brand -->
            <a class="navbar-brand" href="index.php"><img src="assests\logo.gif" id="logo"></a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav mt-1 ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="admin.php">All Customers</a>
                    </li>
                    <li class="nav-item mr-1">
                        <a class="nav-link active" href="history.php">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user-tie text-success"></i> Logged as Admin</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Transaction History Table -->
    <div class="container">
        <table class="table table-dark table-striped animate-bottom mt-5" id="transaction-table" style="display: none;">
            <thead>
                <tr>
                    <th>Sender Account No</th>
                    <th>Amount</th>
                    <th>Receiver Account No</th>
                    <th>Transaction Time</th>
                </tr>
            </thead>
            <tbody>
                <?php

                //Fetch Transaction History from Database

                $sql = "SELECT * FROM transaction";
                $result = mysqli_query($conn, $sql);

                if (!$result) {
                    echo "<div class='alert alert-danger'>There was an error Running Query</div>";
                    exit();
                }

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                        <td>" . $row['sender_account'] . "</td>
                        <td>" . $row['Amount'] . "</td>
                        <td>" . $row['receiver_account'] . "</td>
                        <td>" . $row['transaction_time'] . "</td>
                       </tr>";
                    }
                } else {
                    echo "<div class='alert alert-danger text-center'>There are currently No transactions to Show</div>";
                }

                ?>
            </tbody>
        </table>
    </div>

    <!--Script files-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <!-- Dev Script file -->
    <script>
        //ON load Page event
        var myTimer;

        function spinner() {
            myTimer = setTimeout(showPage, 3000);
        }

        function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("loadtext").style.display = "none";
            document.getElementById("head").style.display = "block";
            document.getElementById("transaction-table").style.display = "table";
        }
    </script>
</body>

</html>