<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz</title>
</head>
<body>
<H1> Dane o klasie</H1>
<?php

$klasa = $_POST['klasa'];
$ilosc = $_POST['ilosc'];
$rok = $_POST['rok'];

echo "Klasa: $klasa w której jest: $ilosc w roku: $rok ";

$polaczenie = mysqli_connect("localhost","root","","szkola");
/*
if($polaczenie){
    echo "połączyłeś się";
}
else
{
    echo "nie";
}
*/

$zapytanie = "INSERT INTO klasy(klasa,ilosc,rok) VALUES ('$klasa',$ilosc,'$rok')";

$zap = mysqli_query($polaczenie,$zapytanie);

if ($zap){
    echo "OK";
}
else{
    "Błąd";
}

$zapytanie1 = "SELECT * FROM klasy";

$zap1 = mysqli_query($polaczenie,$zapytanie1);

if ($zap1){
    echo "OK";
}
else{
    "Błąd";
}

echo "<BR>";

while($r=mysqli_fetch_assoc($zap1))
{
echo "ID: " . $r['id_klasy'] . "NAZWA: " . $r['klasa'] . "Ilosc: " . $r['ilosc'] . "ROK: " . $r['rok'] ."<br>" ;

}

mysqli_close($polaczenie);




?>




</body>
</html>

