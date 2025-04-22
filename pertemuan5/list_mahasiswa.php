<?php 
require_once "dbkoneksi.php";

// 4) Query Data Mahasiswa
$sql = "SELECT *FROM mahasiswa";

// 5) Eksekusi Query
$rs = $dbh->query($sql);

// 6) Ambil Data Hasil Query populasi data ke dalam array
foreach($rs as $row){
    echo '<br>'.$row->nim. ' - '. $row->nama;
}



?>