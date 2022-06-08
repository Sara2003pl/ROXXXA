<?php
require_once('config.php');
$smarty->display('head.tpl');

if (isset($_REQUEST['Firstname'])) {
    $db = new mysqli("localhost", "root", "", "roxxxa");
    $Firstname = $_REQUEST['Firstname'];
    $Lastname = $_REQUEST['Lastname'];

    $email = $_REQUEST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    $phone = $_REQUEST['phone'];

    $adres = $_REQUEST['adres'];

        $q = $db->prepare("INSERT INTO zamówienie VALUES (NULL, ?, ?, ?, ?, ?)");
        $q->bind_param("sssss",$Firstname, $email, $Lastname, $phone, $adres);
        $result = $q->execute();
        if($result) {
            echo "Dupeczka jest w drodze";
        } else {
            echo "Cos nie dziala";
        }
    } 


?>