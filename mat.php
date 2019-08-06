<!DOCKTYPE html>
<html>

<head>

    <link rel="stylesheet" href="styles.css">
    <title> Calle Ciebeles 3 </title>
    <script src="https://kit.fontawesome.com/2c9b326388.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

<a class= "tillbaka" href= "./"> <i class="fas fa-home"></i> </a>

<?php 
$heroTitel = "Mat";
$heroText = "Här får du tips på restauranger att besöka!";
$heroBild = "Bilder/mat.jpg";
include 'hero.php';

?>

<div class= "tips">

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calleCiebeles";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed" . $conn->connect_error); 
    
}

$sql = "SELECT * FROM tips WHERE kategori= 'mat'";
$result= $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row=$result->fetch_assoc()) {
        echo "<div class= 'tipsen'>";
        echo "<h1>" . $row ["titel"] . "</h1>";
        if($row["adress"] != ""){
            echo " <p><b> Adress: </b>" .  $row ["adress"] . "</p>";
        }
        if($row["email"] != ""){
            echo " <p><b> Email: </b>" .  $row ["email"] . "</p>";
        }
        if($row["telefon"] != ""){
            echo " <p><b> Telefonnummer: </b>" .  $row ["telefon"] . "</p>";
        }
        echo "<p><b> Datum: </b>" . $row ["datum"] . "</p>" ;
        echo "<p>" . $row ["beskrivning"] . "</p>";

        echo "</div>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>

</div>


<?php
include 'footer.php';

?>

</body>

</html>
