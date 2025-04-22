<?php 
$temanSaya = ["Jamet", "Caca", "Zaitun"];
print_r($temanSaya);  //untuk menampilkan seluruh nilai array

echo $temanSaya[2];
echo "<ol>";
foreach ($temanSaya as $key => $value) {
    echo "<li>$key. $value</li>";
}

echo "</ol>";
$temanSaya[] = "eko";
unset($temanSaya[0]) ;
print_r($temanSaya);

echo "<br><br><br>";
$buah = ["m" => "alpuket", "rambutan", "mangga"];
print_r($buah);

$tims = ["erwin", "heru", "ali", "zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo $person.'<br>';
}


$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims,"wati");
foreach ($tims as $person) {
    echo $person. '<br/>';
}


?>