<?php
include("model/Template.class.php");
include("view/TampilPasien.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");

$tp = new TampilPasien();

if (isset($_POST['tambah'])) {
    $data = $tp->addData($_POST);
} 
else {
    $data = $tp->add();
}
?>
