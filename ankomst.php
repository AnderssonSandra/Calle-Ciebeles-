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
$heroTitel = "Ankomst";
$heroText = "Här kommer lite information om vad du behöver göra när du anländer till lägenheten.";
$heroBild = "Bilder/hav.jpg";
include 'hero.php';

?>

<div class= "checklistaParent">

<div class= "checklista">

    <h2> Checklista när du anländer till lägenheten </h2>

    <p> <b>Sätt på elen:</b> Elcentralen sitter till höger bakom ytterdörren. </p>
    <p> <b>Sätt på vattnet:</b> Kranen sitter i duschen. Vrid motsols för att sätta igång vattnet. </p>
    <p> <b>Sätt i kontakten till varmvattenberedaren:</b> Den finns i badrummet, till vänster om spegeln. </p>
    <p> <b>Sätt på kylskåpet:</b> Sätt i kontakterna. Det finns ett vrede som reglerar kylan i kylskåpet. Det är OK att ta öl, läsk eller vin, se bara till att fylla på innan ni åker. </p>
    <p> <b>Sätt igång spisen:</b> Gasoltuben finns i skåpet till höger om spisen. Det finns en svart plastknapp på gasoltuben som du stänger av och på gasolen med. Obs! Om gasolen tar slut, byt ut den i järnhandeln. </P>
    <p> <b>Sängkläder och handdukar: </b> Finns i garderoben i det stora sovrummet </p>
    <P> <b>AC: </b> Finns i båda sovrummen. De används endast nattetid. Rekomenderar 24-26 grader. Obs! Glöm inte att tömma hinkarna på balkongerna i sovrummen, de fylls med vatten när AC:n används. </p>

    <br>

    <h2> Övrig information </h2>

    <p> <b>Utemöbler:</b> Grill och utemöbler till terassen finns i uterummet på terassen. Möbler och dynor till balkongen finns i vardagsrummet. </p>
    <p> <b>Vattenslag takterassen: </b> Slagen finns i uterummet på terassen. Uttag till vattenslagen finns på terassen. Det kan vara bra att spola av terassen. Avrinningen finns på golvet vid uterummet. Glöm inte att stänga av vattnet när det inte används.  </p>
    

</div>

</div>

<?php
include 'footer.php';

?>

</body>

</html>
