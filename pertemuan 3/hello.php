<?php 
    function salam($nama =""){
        echo "Selamat Datang, Teman-Teman! ".$nama;
    }
?>

<h1>STT Terpadu Nurul Fikri</h1>
<?php 
    salam("Andi");
    echo"<br>";
    salam();
?>