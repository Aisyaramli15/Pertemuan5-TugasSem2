<?php
require_once 'Config/MySQL.php';

class Kunjungan
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function index()
    {
        $query = "SELECT * FROM prodi";
        $result = mysqli_query($this->conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    public function create($data)
    {
        $query = "INSERT INTO prodi (kode, nama, kaprodi) VALUES (?,?,?)";
        $stmt = mysqli_prepare($this->conn, $query);

        if (!$stmt) {
            die("Prepare failed: " . mysqli_error($this->conn));
        }

        mysqli_stmt_bind_param($stmt, "sss", $data['kode'], $data['nama'], $data['kaprodi']);
        return mysqli_stmt_execute($stmt);
    }

    public function update($id, $data)
    {
        $query = "UPDATE prodi SET kode = ?, nama = ?, kaprodi = ? WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);

        if (!$stmt) {
            die("Prepare failed: " . mysqli_error($this->conn));
        }

        mysqli_stmt_bind_param($stmt, "sssi", $data['kode'], $data['nama'], $data['kaprodi'], $id);
        return mysqli_stmt_execute($stmt);
    }

    public function delete($id)
    {
        $query = "DELETE FROM prodi WHERE id = ?";
        $stmt = mysqli_prepare($this->conn, $query);

        if (!$stmt) {
            die("Prepare failed: " . mysqli_error($this->conn));
        }

        mysqli_stmt_bind_param($stmt, "i", $id);
        return mysqli_stmt_execute($stmt);
    }
}
?>
