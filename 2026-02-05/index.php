<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zajecia 2</title>
</head>
<body>
    <header>
        <p>Strona ze zmiennymi</p>
    </header>
    <main>
    <!-- Tutaj pojawi się PHP -->
     <?php
        $tekst="Franek wyszedł";
        $liczba=123;
        $liczbaPrzecinek=3.5;
        $wartoscLogiczna=FALSE;
        echo $tekst;
        echo "<br>";
        // wyświetlenie typu zmiennej
        echo gettype($tekst);
        echo "<br>";
        // zmiana typu zmiennej
        echo "Liczba całkowita $liczba ma typ:".gettype($liczba);
        echo "<br>";
        $tmp=(float)$liczba;
        echo gettype($tmp);
     ?>
    </main>
    <footer>
        <p>Stronę wykonał: Przemek</p>
    </footer>
</body>
</html>