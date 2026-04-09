<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>tablice asocjacyjne</title>
</head>
<body>
    <header>
        <h1>Tablice asocjacyjne</h1>
    </header>
    <aside>
        <?php
            // Tablica asocjacyjna to jest tablica która zamiast indeksów liczbowych ma tekst
            // deklaracja tablicy asocjacyjnej 1 sposób
            $tablica["imie"]="Aron";
            $tablica["nazwisko"]="Adamski";
            $tablica["ocena"]=6;
            // wypisanie całej tablicy asocjacyjnej
            print_r($tablica);
            // deklaracja tablicy asocjacyjna - 2 sposób
            $tablica2 = ["kot"=>"mleka", "pies"=>"kosc","slon"=>"traba"];
            // wypisanie tablicy
            echo "<br><br>";
            print_r($tablica2);
            // wypisanie elementu pies
            echo "<br><br>";
            echo $tablica2["pies"];
            // zmiana wartości w tablicy asoscjacyjnej
            $tablica2["pies"]="smycz";
            echo "<br><br>";
            echo $tablica2["pies"];

            // funkcje tablic

            $tablica4[]="Franek";
            $tablica4[]="Olivier";
            $tablica4[]=33;
            $tablica4[]=12.2;

            // wyświetlenie całej tablicy za pomocą funkcji
            echo "<br>";
            print_r($tablica4);
            // sortowanie tablicy za pomoca funkcji sort
            sort($tablica4);
            echo "<br>";
            print_r($tablica4);
            // dodanie elementu na koniec na pomocą funkcji array_push
            array_push($tablica4,"Michał","Mateusz");
            echo "<br>";
            print_r($tablica4);
            //usuwanie ostatniego elementu za pomocą funkcji array_pop
            array_pop($tablica4);
            echo "<br>";
            print_r($tablica4);
            // dodawanie pierwszego elementu tablicy za pomocą funkcji array_unshift
            array_unshift($tablica4,"Zbigniew","Piotr");
            echo "<br>";
            print_r($tablica4);
            // usuwanie pierwszego elementu tablicy za pomocą funkcji array_shift
            array_shift($tablica4);
            echo "<br>";
            print_r($tablica4);
            // wyśwoietlenie ilości elementów tablicy
            echo "<br>";
            echo count($tablica4);
        ?>
    </aside>
    <nav>

    </nav>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
</body>
</html>