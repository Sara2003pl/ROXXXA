<?php
require_once('config.php');
$smarty->display('head.tpl');

if(isset($_REQUEST['id']))  {
    $idProduktu = $_REQUEST['id'];
    $q = $db->prepare("SELECT * ...");
}
?>

<form action="final.php">
    <input type="hidden" name="idProduktu" value="<?php echo $idProduktu; ?>">  
    <label for="Firstname">Imię:</label>
    <input type="text" name="Firstname" id="Firstname">
    <label for="Lastname">Nazwisko:</label>
    <input type="text" name="Lastname" id="Lastname">
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">
    <label for="phone">Telefon:</label>
    <input type="text" name="phone" id="phone">
    <label for="adres">Adres:</label>
    <input type="text" name="adres" id="adres">
    <input type="submit" value="Zamów">   
</form>

</body>


</html>