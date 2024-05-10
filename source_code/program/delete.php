<?php
include("model/Template.class.php");
include("model/DB.class.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");

$tp = new TampilPasien();

if (isset($_GET['delete'])) {
    $data = $tp->deleteData($_GET['delete']);
}
else{
    $data = $tp->tampil();
}
?>
