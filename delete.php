<?php 

if(empty($_POST)) die;

$serwer = 'localhost';
$uzytkownik = 'root';
$haslo = '';
$baza = 'cwiczenia1_db';

$polaczenie = new mysqli($serwer, $uzytkownik, $haslo, $baza);

$sql = "DELETE FROM employees WHERE id = '$_POST[id]'";

if($polaczenie->query($sql) === TRUE) {
    echo "Usunięto pracownika";
}

$polaczenie->close();

header("location: ./index.php");