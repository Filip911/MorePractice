<?php

$srv = 'localhost';
$uname = 'root';
$pswd = '';
$dname = 'test1';

$conn = mysqli_connect($srv, $uname, $pswd, $dname);

if (!$conn) {
    die("Not connected,error! " . mysqli_connect_error($conn));
} else {
    echo 'Successfully connected!' . '<br>';
}

// $sql = "CREATE DATABASE test1";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully";
// } else {
//     echo "Error creating database: " . mysqli_error($conn);
// }


// $sql = "CREATE TABLE tests1 (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     password VARCHAR(255),
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

// if (mysqli_query($conn, $sql)) {
//     echo "Table Tests1 created successfully";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }    


$sql ="INSERT INTO persons (firstname, lastname, email)
 VALUES (?, ?, ?, ?)";

if($stmt = mysqli_prepare($conn, $sql)){
mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);
mysqli_stmt_execute($stmt);
 

}