<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container px-5 my-5">
    <form method="POST" action='index2.php'>
        <div class="mb-3">
            <label class="form-label" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" name="namaLengkap" type="text" placeholder="Nama Lengkap" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="namaLengkap:required">Nama Lengkap is required</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="mataKuliah">Mata Kuliah</label>
            <select class="form-select" name="mataKuliah" aria-label="Mata Kuliah">
                <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                <option value="Basis Data">Basis Data</option>
                <option value="Dasar - dasar pemrograman">Dasar - dasar pemrograman</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiTugas">Nilai Tugas</label>
            <input class="form-control" name="nilaiTugas" type="text" placeholder="Nilai Tugas" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiTugas:required">Nilai Tugas</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiUts">Nilai UTS</label>
            <input class="form-control" name="nilaiUts" type="text" placeholder="Nilai UTS" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiUts:required">Nilai UTS</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="nilaiUas">Nilai UAS</label>
            <input class="form-control" name="nilaiUas" type="text" placeholder="Nilai UAS" data-sb-validations="required" />
            <div class="invalid-feedback" data-sb-feedback="nilaiUas:required">Nilai UAS</div>
        </div>
        <div class="d-none" name="submitSuccessMessage">
            <div class="text-center mb-3">
                <div class="fw-bolder">Form submission successful!</div>
                <p>To activate this form, sign up at</p>
                <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
            </div>
        </div>
        <div class="d-none" name="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>
        <div class="d-grid">
            <input class="btn btn-primary btn-lg " name="submitButton" type="submit" value="Submit">
        </div>
    </form>
</div>

<div class="container px-5 my-5">
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Matkul</th>
                <th>Nilai Tugas</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
            </tr>
            <?php
            if(isset($_POST['namaLengkap'])) {
                static $no = 1;
                echo "<tr>";
                echo "<td>$no</td>";
                echo "<td>$_POST[namaLengkap]</td>";
                echo "<td>$_POST[mataKuliah]</td>";
                echo "<td>$_POST[nilaiTugas]</td>";
                echo "<td>$_POST[nilaiUts]</td>";
                echo "<td>$_POST[nilaiUas]</td>";
                echo "</tr>";
                $no++;
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>