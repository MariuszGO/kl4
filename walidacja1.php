<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walidacja 1</title>
</head>
<body>
    <form action="walidacja1.php" method="post">
        <label for="imie">Imię:</label>
        <input type="text" id="imie" name="imie" required pattern="[A-Z]{1,1}[a-z]{2,56}" title="Same litery"><br><br>

       
        <label for="wiek">Wiek:</label>
        <input type="text" id="wiek" name="wiek" pattern="[0-9]{1,3}" title="Same cyfry"><br><br>

       
        <label for="kod">Kod pocztowy:</label>
        <input type="text" id="kod" name="kod" placeholder="Podaj kod format: XX-XXX" pattern="\d{2}-\d{3}" title="Format XX-XXX"><br><br>

       <button type="submit">Wyślij</button>


        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") { // Sprawdzenie, czy formularz został wysłany
            $imie = $_POST['imie']; // Pobranie danych z formularza
      
            $wiek = htmlspecialchars($_POST['wiek']);
    
            $kod = htmlspecialchars($_POST['kod']);

            echo "<h2>Wprowadzone dane:</h2>";  // Wyświetlenie wprowadzonych danych
            echo "Imię: $imie<br>";
          
            echo "Wiek: $wiek<br>";
          
            echo "Kod pocztowy: $kod<br>";
        }
        ?>
    </form>
    
</body>
</html>