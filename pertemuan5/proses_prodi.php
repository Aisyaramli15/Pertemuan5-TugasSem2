<?php 
require_once "dbkoneksi.php";
// 4) tangkap request form
$_kode = $_POST['kode'];
$_nama = $_POST['nama'];
$_kaprodi = $_POST['kaprodi'];
$_proses = $_POST['proses'];

// simpan dalam array data
$ar_data = [$_kode, $_nama, $_kaprodi];

// 5) definisikan query $sql
if($_proses == "Simpan"){
    $sql =  "INSERT INTO prodi(kode, nama, kaprodi) VALUES (?,?,?)";
}elseif($_proses == "Update"){
    $sql =  "UPDATE prodi SET nama=?, kaprodi=?, kode=? WHERE id=?";
    $id_edit = $_POST['id_edit'];
    $ar_data[] = $id_edit;   //4
}elseif($_proses == "Hapus"){
    $sql =  "DELETE FROM prodi WHERE id=?";
    unset($ar_data); //hapus array
    $id_delete = $_POST['id_delete'];
    $ar_data = [$id_delete];

}

?>