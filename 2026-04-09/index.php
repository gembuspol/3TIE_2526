<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pętla for i pętla while</title>
</head>
<body>
    <header>
        <h1>Pętle w PHP</h1>
    </header>
    <aside>
        <ol>
            <!-- tutaj pojawi się skrypt w PHP -->
            <?php
                // pętla for służy do wykonia czynności określoną ilość razy - z góry wiemy ile razy ma wykonac się pętla
                // budowa pętli for
                // for(warunek początkowy; warunek końcowyl; zmiana wartości po przejściu pętli){ instrukcje;}
                for($i=0; $i<6;$i++){
                    echo "<br>";
                    echo $i;
                }
            ?>
        </ol>
    </aside>
    <nav>
        <!-- pętla for zmieniająca się o 3 w sposób malejący -->
         <?php
            for($liczba=20;$liczba>0;$liczba=$liczba-3){
                echo $liczba;
                echo " to zmiejszona o 3 liczba<br>";
            }
         ?>
         <!-- pętla while - wykorzystujemy ją gdy nie wiemy dokładnie ile razy ma zostać wykonana instrukcja -->
          <!-- budowa pętli while -->
           <!-- while(warunek do kiedy ma działać pętla){instrukcje} -->
        <?php
            $zmienna=0;
            while($zmienna<6){
                echo "<br>";
                echo $zmienna;
                $zmienna++;
            }
        ?>
    </nav>
    <footer>
        <!-- sprawdzanie czy liczba jest podzielna przez liczbę za pomocą pętli while i for -->
         <?php
         $liczba=rand(1,100);
         echo "Wylosowałem liczbe $liczba";
        //  będziemy dzielić liczbę przez liczby od 1 do połowy wartości wylowanej liczby, zwiększając każdą liczbę o 5
        for($i=1;$i<$liczba/2;$i=$i+5){
            $dzielenie=$liczba/$i;
            echo "<br>Wynik dzieielania liczby $liczba przez $i wynosi $dzielenie<br>";
        }
        $j=1;
        while($j<$liczba/2){
          $dzielenie=$liczba/$j;
            echo "<br>Wynik dzieielania za pomocą petli while liczby $liczba przez $j wynosi $dzielenie<br>";  
            $j=$j+5;
        }
         ?>
    </footer>
</body>
</html>