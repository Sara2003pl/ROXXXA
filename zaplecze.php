<?php
require_once('config.php');
$smarty->display('head.tpl');

$q = $db->prepare("SELECT * FROM zamówienie");

    if ($q && $q->execute()) {

        $result = $q->get_result();

        while ($zamówienie = $result->fetch_assoc()) {

            $id = $zamówienie['id'];
            $imie = $zamówienie['Firstname'];
            $nazwisko = $zamówienie['Lastname'];
            $email = $zamówienie['email'];
            $phone = $zamówienie['phone'];
            $adres = $zamówienie['adres'];

            echo $id;
            echo $imie;
            echo $nazwisko;
            echo $email;
            echo $phone;
            echo "$adres<br>";
        }
    }
?>