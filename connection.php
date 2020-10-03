<?php
$servername = 'localhost';
$username = "root";
$password = "";
$database = "fgicbank";

//Create connection to Database

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("connetion failed: " . mysqli_connect_error());
}

//Creating a table

// $sql = "CREATE TABLE customers (
//         `cust_id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//         `first_name` VARCHAR(30) NOT NULL,
//         `last_name` VARCHAR(30) NOT NULL,
//         `gender` VARCHAR(10) NOT NULL,
//         `email` VARCHAR(50) NOT NULL,
//         `account_no` INT(11) NOT NULL,
//         `balance` INT(11) NOT NULL
// )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table created successfully";
// } else {
//     echo "Error Creating Table " . mysqli_error($conn);
// }


//Inserting user into Database

// $sql = "INSERT INTO customers (first_name, last_name, gender, email, account_no, balance) VALUES 
// ('Vladmir', 'Putin', 'male', 'pkmkb@gmail.com', 98765441, 70000)";

// if (mysqli_query($conn, $sql)) {
//     echo "New recored Created";
// } else {
//     echo "Error" . $sql . "<br>" . mysqli_error($conn);
// }
