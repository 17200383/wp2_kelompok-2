<div class="container d-flex justify-content-center align-items-center">
    <h1>Daftar Obat</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Stok</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableData as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['comments'] ?></td>
                    <td><?= $row['stock'] ?></td>
                    <td><?= $row['lastmodified'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>