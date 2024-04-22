<?php

class matematyka{

  public  $a, $b, $c;

    function __construct($a,$b){
        $this->a = $a;
        $this->b = $b;
    }
    function __destruct(){
      echo "Działa destruktor";
    }


    function suma($a,$b){
        return $a+$b;
    }
   function zmien($a, &$b){
        $a = $a + 10;
        $b = $b + 100;
        echo "\n w funkcji \na jest równe $a \n b jest równe $b";
    }

}
//eeee

class pola extends matematyka{

 public function pole_kwadratu($a){
    
    if($a>0){

    return $a*$a;
    }
    else{
      echo "Podałeś niepoprawne liczby";
    }


  }



}

$o1 = new matematyka(55,66);
$o2 = new matematyka(33,133);

$o3 = new pola(22,11);


$wyn = $o3->suma(1,2);


$ilosc = 100;


$wyn =$o3->pole_kwadratu(5);

echo "******* " .  $wyn . " ******<BR>";

echo "ALA " . "MA " . $ilosc . " KOTÓW <BR>";

echo "ALA MA $ilosc KOTÓW";


$wynik = $o1->suma(10,20);
$wynik2 = $o2->suma(3,33);

echo $wynik."<br>";
echo $wynik2;

$a= 11;
$b= 22;

$o1->zmien($a,$b);
echo "<BR><BR>";
echo "\n po funkcji \n a jest równe $a \n b jest równe $b";


echo "skladowa a : $o2->a \n";
echo "skladowa b : $o2->b \n";

?>