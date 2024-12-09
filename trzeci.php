<?php
//1000 liczb z przedziału od 1000 do 9000 losowe liczby
/*
for($i=0;$i<1000; ){
    $x = rand(1000,9000);
        if($x % 5 == 0){
            $i++;
            echo "$i . $x <br>";
        }
}


for($i=0;$i<1000;$i++){
    $x = rand(200,1800);
    $x= $x*5;
    $s = $i+1;    
    echo "$s . $x <br>";
    }

*/



$tablica = array( "Biologia","Jezyk Polski" , "Matematyka" , "Fizyka" , "WF" , "Chemia" , "Strony i aplikacje" , "Pracownia sys");

echo "<table border = 1>
<tr><td>Przedmiot</td><td>Ocena</td></tr>";

for($i = 0; $i < count($tablica); $i++){

    $ocena= rand(1,5); 
    echo "<tr><td>$tablica[$i]</td><td>$ocena</td></tr>";
    
}
 echo "</table>";





?>