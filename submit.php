<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calleCiebeles";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed" . $conn->connect_error); 
    
}

$titel = $conn->real_escape_string($_POST['titel']);
if(isset($_POST["adress"])){
    $adress = $conn->real_escape_string($_POST['adress']);
}else{
    $adress = "";
}
if(isset($_POST["email"])){
    $email = $conn->real_escape_string($_POST['email']);
}else{
    $email = "";
}
if(isset($_POST["telefon"])){
    $telefon = $conn->real_escape_string($_POST['telefon']);
}else{
    $telefon = "";
}
$kategori = $conn->real_escape_string($_POST['kategori']);
$beskrivning = $conn->real_escape_string($_POST['beskrivning']);

$sql= "INSERT INTO tips (titel, adress, email, telefon, kategori, beskrivning) VALUES ('". $titel . "', '" . $adress . "', '" . $email . "', '" . $telefon . "', '" . $kategori . "', '" . $beskrivning ."')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Oj något gick fel!" . $sql . "<br>" . $conn->error;

}

$conn->close();

?>

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

$heroTitel = "Tack för ditt tips!";
$heroText ="";
$heroBild = "Bilder/hav.jpg";

include 'hero.php';


?>
</body>

</html>
