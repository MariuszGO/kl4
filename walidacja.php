<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walidacja</title>
</head>
<body>

<form action="walidacja.php" method="post">
    <label for="imie">Imię:</label>
    <input type="text" id="imie" name="imie" required pattern="[A-Z]{1,1}[a-z]{3,56}" title="Same litery"><br><br>

    <label for="nazwisko">Nazwisko:</label>
    <input type="text" id="nazwisko" name="nazwisko" required pattern="[A-Z]{1,1}[a-z]{3,56}" title="Same litery"><br><br>

    <label for="wiek">Wiek:</label>
    <input type="text" id="wiek" name="wiek" pattern="[0-9]{1,3}" title="Same cyfry"><br><br>

    <label for="miasto">Miasto:</label>
    <input type="text" id="miasto" name="miasto" pattern="[A-Z]{1,1}[a-z]{3,56}" title="Same litery"><br><br>

    <label for="Kod pocztowy">Nazwisko:</label>
    <input type="text" id="kod" name="kod" pattern="^\d{2}-\d{3}$"title="Format XX-XXX"><br><br>

    <input type="submit" value="Wyślij">


    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") { // Sprawdzenie, czy formularz został wysłany
        $imie = $_POST['imie']; // Pobranie danych z formularza
        $nazwisko = htmlspecialchars($_POST['nazwisko']);
        $wiek = htmlspecialchars($_POST['wiek']);
        $miasto = htmlspecialchars($_POST['miasto']);
        $kod = htmlspecialchars($_POST['kod']);

        echo "<h2>Wprowadzone dane:</h2>";  // Wyświetlenie wprowadzonych danych
        echo "Imię: $imie<br>";
        echo "Nazwisko: $nazwisko<br>";
        echo "Wiek: $wiek<br>";
        echo "Miasto: $miasto<br>";
        echo "Kod pocztowy: $kod<br>";
    }
    ?>

</body>
</html>