<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje matematyczne</title>
</head>
<body>
    <header>
        <h1>Funkcje mateatyczne</h1>
    </header>
    <main>
                <!-- tutaj pojawi się skrypt  -->
        <?php
            function suma($liczba1,$liczba2){
                $sumaLiczb=$liczba1+$liczba2;
                return $sumaLiczb;
            }
            // wywołanie funkcji i zapisanie wyniku do zmiennej
            $wynik=suma(23,55);
            //wypisanie wyniku na ekran
            echo $wynik;
            echo "<h2>Zaokrąglanie liczb</h2>";
            $liczbaDoZaokraglenia=325.6354;
            echo "<p>Liczba zaokrąglona do dwóch miejsc po przecinku: ".round($liczbaDoZaokraglenia,2)."</p>";
            //zaokrąglenie w górę
            echo "<p>Liczba  zaokrąglona w górę: ";
            echo ceil($liczbaDoZaokraglenia);
            echo "</p>";
            //liczba zaokrąglona w dół
             echo "<p>Liczba  zaokrąglona w dół: ";
            echo floor($liczbaDoZaokraglenia);
            echo "</p>";
            //liczba psedolosowa
            echo "<br>Wylosowaliśny liczbę:".rand();
            echo "<br>Wylosowaliśny liczbę z przedziału od 1 do 100: ".rand(1,100);
            echo "<br>Wylosowaliśny liczbę od zera do 1: ".rand(0,100)/100;
            //potegowanie
            echo "<br>Potegowanie liczby 4 do potegi 12 wynosi: ";
            echo pow(3,12);
            //pierwiastkowanie - pierwiastek kwadratowy
            echo "<br>Pierwiastek drugirgo stopnia z liczby 144: ".sqrt(144);
            //pierwiastek trzeciego stopnia z 27
            echo "<br> Pierwiastek trzeciego stopnia z 27: ";
            echo pow(27,1/3);
        ?>
    </main>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
</body>
</html>