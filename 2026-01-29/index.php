<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pierwsze PHP</title>
</head>
<body>
    <header>
        <h1>Strona klasy 3TIE</h1>
    </header>
    <main>
        <!--  -->
        <?php
            // wyświetlenie danych na ekran
            echo "Leon mówi, że co!";
            // deklaracja zmiennej
            $zmienna="patapon powiedział Marek";
            // wyświetlanie zmiennej
            echo $zmienna;
            // wykorzystanie HTML w PHP
            echo "<h3>tekst w nagłówku 3 stopnia</h3>";
            // działania na zmiennych
            $liczba1=3;
            $liczba2=8.3;
            echo "Wynik dodawania: ";
            echo $liczba1+$liczba2;
            // potęgowanie liczb
            $wynik=pow(4,3);
            echo "Wynik potęgowania liczby 4 do potęgi 3 to: ".$wynik;
            // pierwiastek kwadratowy
            $wynik=sqrt(64);
            echo "Pierwiastek kwadratowy z liczby 64 to: $wynik"; 
        ?>
    </main>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
</body>
</html>