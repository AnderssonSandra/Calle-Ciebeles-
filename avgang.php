<!DOCKTYPE html>
<html>

<head>

    <link rel="stylesheet" href="styles.css">
    <title> Calle Cibeles 3 </title>
    <script src="https://kit.fontawesome.com/2c9b326388.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

<a class= "tillbaka" href= "./"> <i class="fas fa-home"></i> </a>

<?php 
$heroTitel = "Avgång";
$heroText = "Här kommer lite information om vad du behöver göra när du ska lämna lägenheten.";
$heroBild = "Bilder/hav.jpg";
include 'hero.php';

?>

<div class= "checklistaParent">

<div class= "checklista">

    <h2> Checklista när du ska lämna lägenheten </h2>

    <P> <b>Pengar till städerskan: </b> Lägg 50 Euro på köksbordet till städerskan. </p>
    <p> <b>Stäng av elen:</b> Elcentralen sitter till höger bakom ytterdörren. </p>
    <p> <b>Stäng av vattnet:</b> Kranen sitter i duschen. Vrid medsols för att stänga av vattnet. </p>
    <p> <b>Dra ur kontakten till varmvattenberedaren:</b> Den finns i badrummet, till vänster om spegeln. </p>
    <p> <b>Stäng av och avfrosta kyl och frys:</b> Dra ur kontakterna. Avfrosta och torka ut både kyl och frys. Se till att dörrarna står öppna. Lämna lite öl, vin och läsk till nästa som kommer. </p>
    <p> <b>Stäng av spisen:</b> Gasoltuben finns i skåpet till höger om spisen. Det finns en svart plastknapp på gasoltuben som du stänger av och på gasolen med. </P>
    <P> <b>Utemöbler: </b> Ställ in alla utemöbler på terassen samt grill i uterummet. Glöm inte att göra rent grillen innan. Ställ in alla balkongmöbler i vardagsrummet. </p>
    <p> <b>Lämna fönstret i duschen öppet: </b> Stäng inte igen fönstret helt utan lämna en lite glipa öppen. Det finns ett bundband du kan hänga upp fönstret på </p>
    <P> <b>AC: </b> Töm hinkarna på balkongerna till sovrummen. Se till att AC:n är av. </p>
    <P> <b>Sängkläder och handdukar: </b> Lägg alla använda sängklader och handdukar på badrumsgolvet </p>
    <P> <b>Jalusier: </b> Dra ner alla jalusier. Dra för gardiner och lås uterummet på terassen. </p>

</div>

</div>

<?php
include 'footer.php';

?>

</body>

</html>
