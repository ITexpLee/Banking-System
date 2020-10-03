<?php

//Connect to Database

include 'connection.php';



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
    <nav role="navigation" class="navbar navbar-expand-md bg-dark navbar-dark py-0 animate-bottom" id="navbar" style="display: none;">
        <!-- Brand -->
        <a class="navbar-brand" href="index.php"><img src="assests\logo.gif" id="logo"></a>

        <!-- Navbar links -->
        <ul class="navbar-nav float-right mt-1">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-tie text-success"></i> Logged as Admin</a>
            </li>
        </ul>
    </nav>

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