<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
            <label for="imie">Imię: </label>
            <input type="text" id="imie1" name="imie2">
            <label for="nazwisko">Nazwisko: </label>
            <input type="text" id="nazwisko1" name="nazwisko2">
            <label for="kod">Kod pocztowy: </label>
            <input type="text" id="kod1" name="kod2">
            <input type="submit" value="Wyślij">
</form>
<?php
if(!empty($_POST["imie2"])&&!empty($_POST["nazwisko2"])&&!empty($_POST["kod2"])){
    $polaczenie=mysqli_connect("localhost","root","","baza");
    $nazwisko=$_POST["nazwisko"];
}
?>
</body>
</html>