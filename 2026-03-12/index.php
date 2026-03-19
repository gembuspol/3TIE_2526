<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice</title>
</head>
<body>
    <header>
        <h2>Tworzenie i uzywanie tablic</h2>
    </header>
    <main>
    <!-- tutaj pojawi się skrypt php -->
        <?php
        // deklaracja tablicy - 1 sposób
        $tablica1=array(1,2,4,"Franek gra", "bartek nie uważa");
        //wypisywanie danych z tablice
        // wypisanie 1 elementu tablicy - elementy tablicy numerujemy od 0; numery elementów tablicy nazywamy indeksami tablicy
        echo $tablica1[0];
        // zmiana wartości w tablicy
        $tablica1[0]=67;
        echo "<br>";
        echo $tablica1[0];
        // deklaracja tablicy - 2 sposób
        $tablica2[]=3;
        $tablica2[]=44;
        $tablica2[]="Filip nie dotrzymuje tempa";
        $tablica2[]="Franek nie zakłada się";
        //wypisanie 1 elemetu tablica2
        echo "<br>";
        echo $tablica2[0];
        // działania na tablicach - można dodawać, odejmować, mnożyć wartości z tablic tak jak pozostałe zmienne
        echo "<br>";
        echo "Dodawanie wartości o indeksach 1 i 2: ";
        echo $tablica1[1]+$tablica1[2];
        //wypisanie wszystkich wartości tablicy za pomocą funkcji print_r
        echo "<br>";
        print_r($tablica1);
        echo "<br>";
        print_r($tablica2);
        ?>
    </main>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
</body>
</html>