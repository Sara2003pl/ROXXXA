    <?php
    require_once('config.php');

    $q = $db->prepare("SELECT * FROM produkty");

    if ($q && $q->execute()) {

        $result = $q->get_result();
        $produkty = array();
        while ($produkt = $result->fetch_assoc()) {

            $id = $produkt['id'];
            $nazwa = $produkt['nazwa'];
            $cena = $produkt['cena'];
            $zdj = $produkt['zdj'];
            $p = array(
                "id" => $id,
                "nazwa" => $nazwa,
                "cena" => $cena,
                "zdj" => $zdj
            );
            array_push($produkty, $p);
        }
        $smarty->assign("produkty", $produkty);
        $smarty->display("bebech.tpl");
    }
    ?>



    </body>

    </html>