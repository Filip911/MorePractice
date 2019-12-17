<?php

$server = 'localhost';
$yser = 'root';
$pwd = '';
$db = 'test2';


$mysqli = new mysqli($server, $yser, $pwd, $db);
if (!$mysqli) {
    die("Error connecting" . $mysqli->connect_error);
} else {
    echo "Connect Successfully. Host info:<br> " . $mysqli->host_info;
}




// $sql = "CREATE database test2";
// if ($mysqli->query($sql)) {
//     echo 'Database created!';
// } else {
//     echo 'ERROR could not able not create. ' . $mysqli->error;
// }



// $sql = "CREATE TABLE persons(
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     first_name VARCHAR(30) NOT NULL,
//     last_name VARCHAR(30) NOT NULL,
//     email VARCHAR(70) NOT NULL UNIQUE
//     )";
// if ($mysqli->query($sql) === true) {
//     'Echo table created successfully!';
// } else {
//     echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
// }



// $sql = "INSERT INTO persons( first_name, last_name, email)
// VALUES ('Jakov' , 'Boskovic' , 'jakov@gmail.com')";

// if ($mysqli->query($sql)) {
//     echo 'Success inserted';
// } else {
//     echo "Not inserted,ERROR $sql. " . $mysqli->error;
// }



// $sql = "INSERT INTO persons (first_name, last_name, email) VALUES
//             ('John', 'Rambo', 'johnrambo@mail.com'),
//             ('Clark', 'Kent', 'clarkkent@mail.com'),
//             ('John', 'Carter', 'johncarter@mail.com'),
//             ('Harry', 'Potter', 'harrypotter@mail.com')";
//  if($mysqli->query($sql) === true){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
// }           














// $server = 'localhost';
// $user = 'root';
// $pwd = '';
// $db = 'test';

// try {
// $conn = mysqli_connect($server, $user, $pwd, $db);
//     echo 'successfully connected!';
// } catch (Exception $e) {
//     mysqli_connect_error($e);
// }



// try {
//     $mysqli = new mysqli($server, $user, $pwd, $db);
//     echo 'success connect';
//   } catch(Exception $e) {
//     error_log($e->getMessage());
//     exit('Error connecting to database'); //Should be a message a typical user could understand
//   }


// $srv = 'localhost';
// $uname = 'root';
// $pswd = '';
// $dname = 'test1';

// $conn = mysqli_connect($srv, $uname, $pswd, $dname);

// if (!$conn) {
//     die("Not connected,error! " . mysqli_connect_error($conn));
// } else {
//     echo 'Successfully connected!' . '<br>';
// }

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


// $sql ="INSERT INTO persons (firstname, lastname, email)
//  VALUES (?, ?, ?, ?)";

// if($stmt = mysqli_prepare($conn, $sql)){
// mysqli_stmt_bind_param($stmt, "sss", $firstname, $lastname, $email);
// mysqli_stmt_execute($stmt);
 

// }