<?php
$db = new mysqli("localhost", "root", "", "wedkowanie");
$imie = $_REQUEST['imie'];
$nazwisko = $_REQUEST['nazwisko'];
$adres = $_REQUEST['adres'];
// var_dump($_REQUEST);
$zapytanie = $db->prepare("INSERT INTO karty_wedkarskie (id, imie, nazwisko, adres, data_zezwolenia, punkty) VALUES (NULL, ?, ?, ?, NULL, NULL)");
$zapytanie->bind_param("sss", $imie, $nazwisko, $adres);
$zapytanie->execute();
$db->close();
?>