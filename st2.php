<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="st2.php" method="GET">
        <input type="text" name="liczba">
        <input type="submit" value="Sprawdź">
    </form>
    
<?php
if(isset($_GET['liczba'])){

$b = $_GET['liczba'];

if( $b > 50 && $b < 150){
    echo "b: $b jest z przedziału od 50 do 150";
}
else {
    echo "b:  $b jest poza przedziałam";
}
}
?>


</body>
</html>