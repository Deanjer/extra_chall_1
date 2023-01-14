<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<a href="http://localhost/extra_chall_1/test.html"><button style="width:100px; height:40px; background-color:rgb(24, 112, 207);" >Back</button></a><br>
</body>
</html>





<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//     echo print_r($_POST);




$servername = "localhost";
$username = "Dean";
$password = "";
$dbname = "auto";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO autodata (merk, bouwjaar, kleur, kenteken, prijs) VALUES ('".$_POST['merk']."','".$_POST['bouwjaar']."','".$_POST['kleur']."','".$_POST['kenteken']."','".$_POST['prijs']."')";
        // use exec() because no results are returned
        echo "$sql";
if ($conn->query($sql) === TRUE) {
  echo "Data toegevoegd";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>