<?php
include 'DataBase.php';
$db = new database();
$id = $_REQUEST['id'];
$delete = $db->delete($id);

if($delete){
    echo "<script>alert('Selesai, Data Telah Berhasil Dihapus');</script>";
		echo "<script>window.location.href = 'HalamanUtama.php';</script>";
}
?>
