<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje cz.2</title>
</head>
<body>
    <header>

    </header>
    <aside id="lewa">
    <?php
        // deklaracja funkcji
        function wyswietlImie(){
            $imie="Grzesiek";
            return "Witaj na stronie $imie";
        }
        
        // wywołanie funkcji
        echo wyswietlImie();

        echo "<br>";
        echo "<br>";
        // funkcja z parametrami
        function typDanych($zmienna){
            echo "Zmienna: ".$zmienna." ma typ: ".gettype($zmienna);
        }
        // wywołanie funkcjio z parametrem
        typDanych(TRUE);
    ?>
    </aside>
    <aside id="prawa">

    </aside>
    <footer>
        <p>Stronę wykonał Przemek</p>
    </footer>
    
</body>
</html>