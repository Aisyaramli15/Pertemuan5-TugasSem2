<?php 

/**
 * Fungsi untuk menghitung nilai akhir mahasiswa
 * @param $nilai_uts Nilai UTS (0-100)
 * @param $nilai_uas Nilai UAS (0-100)
 * @param $nilai_tugas Nilai Tugas/Praktikum (0-100)
 * @return Nilai Akhir Mahasiswa
 */

function hitung_nilai($nilai_uts, $nilai_uas, $nilai_tugas) {
    define("NILAI_UTS", 25);
    define("NILAI_UAS", 30);
    define("BOBOT_TUGAS", 0.45);
    $nilai_akhir = (0.25*$nilai_uts) + (0.30*$nilai_uas) + (0.45*$nilai_tugas)
    return $nilai_akhir;
}

function kelulusan($nilai){
    define("NILAI_lulus", 60);
    if($nilai >= NILAI_LULUS){
        return "LULUS";
    } else {
        return "TIDAK LULUS";
    }
}
?>