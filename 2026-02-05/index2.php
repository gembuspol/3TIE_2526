<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <header>
        <h1>Funkcje</h1>
    </header>
    <main>
        <!-- tutaj pojawi się php -->
         <?php
            // tworzenie funkcji - fragment programu, który może być wykonany wielokrotnie
            // funkcja bez parametrów wywołania
            function wypisz(){
                echo " Tutaj może pojawić się długi tekst pisany wielokrotnie<br>";
            }
            
            echo "uruchomienie funkcji wypisz()";
            // wywołanie funkcji - trzy razy wywołujemy
            wypisz();
            wypisz();
            wypisz();
            // funkcja z parametrami wywołania
            function potegowanie($podstawa,$potega){
                $wynik=pow($podstawa,$potega);
                echo "Wynik dzialania $podstawa do potegi $potega wynosi $wynik";
            }
            // wywolanie funkcji potegowanie
            echo "Funkcja potegowanie <br>";
            potegowanie(4,6);
         ?>
    </main>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
</body>
</html>