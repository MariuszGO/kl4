<?php
if ($_GET['login']=="admin" && $_GET['haslo']=="admin123"){
echo "Udalo się zalogować: ". $_GET['login']. " z hasłem: " . $_GET['haslo'] ;
}
else{
    echo "Dane login: " . $_GET['login'] . " i hasło: " . $_GET['haslo'] . " są niepoprawne!!!";
}

?>