<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablice wielowymiorowe</title>
</head>
<body>
    <header>
        <p>strona z tablicami wielowymiarowymi</p>
    </header>
    <main>
        <!-- tworzenie tablicy -->
         <?php
        //  deklaracja tabli jednowymiarowej
        $tablica=array("Liczba","data",32,345.6);
        // wypisanie całej zawartości tablicy
        print_r($tablica);
        // deklaracja tablicy dwuwymiarowej - 1 sposób
        $tablica2[0][0]="Element 1";
        $tablica2[0][1]="Element 2";
        $tablica2[0][2]="Element 3";
        $tablica2[1][0]="Element 4";
        $tablica2[1][1]="Element 5";
        $tablica2[1][2]="Element 6";
        // wypisanie tablicy dwuwymiarowej
        echo "<br>";
        print_r($tablica2);
        // Wypisanie pojedynczych elementów
        // wypisanie z drugiego elementu tablicy, trzeciego podelementu
        echo "<br>";
        echo "Wypisanie z drugiej tablicy jej trzeciego podelementu: ".$tablica2[1][2];
        //zmiana wartości w tablicy dwuwymiarowej (chemy zmienić wartość zawierającą Element 4 - jest to element z drugiej tablicy, jej pierwszy podelement)
        $tablica2[1][0]="Nowa wartość";
         // wypisanie tablicy dwuwymiarowej
        echo "<br>";
        print_r($tablica2);
         ?>
    </main>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
</body>
</html>