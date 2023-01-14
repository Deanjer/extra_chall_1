

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);







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

$sql = "SELECT `id`, `merk`, `kenteken`, `kleur`, `bouwjaar`, `prijs` FROM `autodata` WHERE 1";
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo "<br> id: ". $row["id"]. " - merk: ". $row["merk"]. "- kenteken " . $row["kenteken"] . "- kleur " . $row["kleur"] . "- bouwjaar " . $row["bouwjaar"] . "- prijs " . $row["prijs"] . "<br>";
//     }
// } else {
//     echo "0 results";
// }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/database.css">
</head>
<body>
    <a href="http://localhost/extra_chall_1/test.html"><button class="d-db">Terug</button></a>
    <table align="center" border="1px" style="width:80%; line-height:3">
        <tr>
            <th colspan="6"><h2>Auto data</h2></th>
        </tr>
<tr>
  <th>ID</th>
  <th>Merk</th>
  <th>Kenteken</th>
  <th>Kleur</th>
  <th>Bouwjaar</th>
  <th>Prijs</th>
  </tr>
<?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    

    ?>
    <tr>
        <td style="text-align:center;"><?php echo $row['id']; ?></td>
        <td style="text-align:center;"><?php echo $row['merk']; ?></td>
        <td style="text-align:center;"><?php echo $row['kenteken']; ?></td>
        <td style="text-align:center;"><?php echo $row['kleur']; ?></td>
        <td style="text-align:center;"><?php echo $row['bouwjaar']; ?></td>
        <td style="text-align:center;"><?php echo $row['prijs']; ?></td>
    </tr>
    <?php
    }
}else {
    echo "0 results";
}
?>
    </table>
   <?php $conn->close(); ?>
</body>
</html>

<!-- $sql = "SELECT `id`, `merk`, `kenteken`, `kleur`, `bouwjaar`, `prijs` FROM `autodata` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - merk: ". $row["merk"]. "- kenteken " . $row["kenteken"] . "- kleur " . $row["kleur"] . "- bouwjaar " . $row["bouwjaar"] . "- prijs " . $row["prijs"] . "<br>";
    }
} else {
    echo "0 results";
} -->