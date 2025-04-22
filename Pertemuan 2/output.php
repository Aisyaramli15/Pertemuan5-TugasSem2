<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'] ?? '-';
    $namaLengkap = $_POST['namaLengkap'] ?? '-';
    $jenisKelamin = $_POST['jenisKelamin'] ?? '-';
    $programStudi = $_POST['programStudi'] ?? '-';
    $domisili = $_POST['domisili'] ?? '-';
    $email = $_POST['email'] ?? '-';
    $skills = $_POST['skill'] ?? [];
    
    $ar_prodi = ["TI" => "Teknik Informatika", "SI" => "Sistem Informasi", "BD" => "Bisnis Digital"];
    $ar_skill = ["HTML" => 10, "CSS" => 10, "javaScript" => 20, "RWD Boostrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    
    $programStudiText = $ar_prodi[$programStudi] ?? '-';
    $totalSkillScore = array_sum(array_intersect_key($ar_skill, array_flip($skills)));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container px-5 my-5">
    <h2 class="mb-4">Hasil Pendaftaran</h2>
    <table class="table table-bordered">
        <tr><th>NIM</th><td><?= htmlspecialchars($nim) ?></td></tr>
        <tr><th>Nama Lengkap</th><td><?= htmlspecialchars($namaLengkap) ?></td></tr>
        <tr><th>Jenis Kelamin</th><td><?= htmlspecialchars($jenisKelamin) ?></td></tr>
        <tr><th>Program Studi</th><td><?= htmlspecialchars($programStudiText) ?></td></tr>
        <tr><th>Domisili</th><td><?= htmlspecialchars($domisili) ?></td></tr>
        <tr><th>Email</th><td><?= htmlspecialchars($email) ?></td></tr>
        <tr><th>Skill</th><td><?= !empty($skills) ? implode(", ", $skills) : '-' ?></td></tr>
        <tr><th>Total Skor Skill</th><td><?= $totalSkillScore ?></td></tr>
    </table>
    <a href="form_registrasi.php" class="btn btn-primary">Kembali</a>
</div>

</body>
</html>