<?php
include 'dbconnection.php';
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["email"];
$d=$_POST["psw"];
$e=$_POST["mobileno"];
try {
    
    $sql = "INSERT INTO reg (firstname, lastname, email,password,mobno)
    VALUES ('$a', '$b', '$c','$d','$e')";
    // use exec() because no results are returned
    $conn->exec($sql);
   // echo "New record created successfully";
   include 'login.html';
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

