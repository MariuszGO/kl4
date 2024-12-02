<?php

$a = 30;
$b = 30;
$c = "30";

$d = $a + $b;

//echo "wynik : $d";
//= przypisz
// == czy są równe
// === czy są równe i są tego samego typu
// != różne
// <= 
// >=

$e = 20;


// większa od 10 a mniejsza od 20
// większa od 20 a mniejsza od 30
// wieksza od 30 a mniejsza od 40 
// poza podanymi zakresami
//if (warunek1 && warunrk2)
//if (warunek1 and warunek2)



if ($a === $b){
    echo "równe";
}
else{
    echo "różne";
}

$login = "admin";
$haslo = "admin123";


// proszę napisać pętle która wyświetli na ekranie 100 licz
/*for ($i=0;$i<5;$i++){
echo "Witaj";
}
while(warunek){
inkrementacja;
instrukcje
}

do{
inkrementacja;
instrukcje
}while(warunek)

foreach($tablica as $klucz){
echo $klucz;
}

*/
echo "<br><br>";
$n = 20;

for ($i = 0 ; $i < $n ; $i++){

                 for ($j = 0 ; $j < $n ; $j++){
                                                echo "*";
                                                }
echo "<br>";
}

$dni = array ("poniedziałek", "wtorek", "środa", "czwartek", "piątek", "sobota", "niedziela");

echo "<ul>";
foreach ($dni as $k ){
    echo "<li>".  $k . "</li>" ;
}

echo "</ul>";



echo "************** " . $dni['5'] . " **************"; 



?>