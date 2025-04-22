
<div class="container">
    <div class="card">
        <div class="card-body">
            <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Tambah data
            </button>
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Default Modal</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="kode">kode</label>
                                <input type="text" name="kode" class="form-control" required>
                                <label for="nama">nama</label>
                                <input type="text" name="nama" class="form-control" required>
                                <label for="kaprodi">kaprodi</label>
                                <input type="text" name="kaprodi" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" name="type" value="tambah" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kaprodi</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once("Controllers/Prodi.php");

                    $row = $prodi->index();
                    $nomor = 1;
                    foreach ($row as $item):
                    ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $item['kode']; ?></td>
                            <td><?= $item['nama']; ?></td>
                            <td><?= $item['kaprodi']; ?></td>
                            <td>
                                <form action="" method="post">
                                    <input type="hidden" name="id" value="<?= $item['id']; ?>">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="submit" value="delete" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                    if (isset($_POST['type'])) {
                        if ($_POST['type'] == "delete") {
                            $prodi->delete($_POST['id']);
                            echo '<script>alert("hapus berhasil")</script><meta http-equiv="refresh" content="0; url=?url=prodi">';
                        }
                        if ($_POST['type'] == "tambah") {
                            $data = ['kode' => $_POST['kode'], 'nama' => $_POST['nama'], 'kaprodi' => $_POST['kaprodi']];
                            $prodi->create($data);
                            echo '<script>alert("Berhasil ditambah")</script><meta http-equiv="refresh" content="0; url=?url=prodi">';
                        }
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Kaprodi</th>
                        <th>aksi</th>

                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>