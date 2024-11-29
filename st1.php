<?php


//instrukcja if
$zmienna = true;

if($zmienna){
    echo "Prawda";
}
else{
    echo "Fałsz";
}


$a = 5;
$b = 10;

if($a<$b){
    echo "a mniejsze od b";
}
elseif($a>$b){
    echo "a większe od b";
}
else{
    echo "a jest równe b";
}


//pętla for
echo "<br>for<br>";
for($i=0;$i<100;$i++){
    echo "$i ";
}

//pętla while
echo "<br>while<br>";
$i=0;
while($i<100){
    echo "$i ";
    $i++;
}
echo "<br>do while<br>";
$i=0;
do{
    echo "$i ";
    $i++;
}while($i<100);

echo "<br>foreach<br>";
$tablica = array("poniedziałek","wtorek","środa","czwartek","piątek","sobota","niedziela");
$i=0;
foreach($tablica as $klucz){
    echo "$klucz <br>";
}
echo "<br>";

$tab[0]="JAN";
$tab[1]="ADAM";
$tab[2]="PAWEŁ";
$tab[3]="KRZYSZTOF";
foreach($tab as $klucz){
    echo "$klucz <br>";
}

?>

