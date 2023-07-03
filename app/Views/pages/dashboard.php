<section style="padding-top: 5em;">
<div class="container justify-content-center align-items-center">
    <h1>Daftar Obat</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Dosis</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?= form_open('dashboard/update') ?>
            <input type="hidden" name="refer" value="<?= $refer ?>">
            <?php foreach ($tableData as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $row['name'] ?>">
                    </td>
                    <td>
                        <textarea class="form-control" rows="4" id="comments" name="comments"><?= $row['comments'] ?></textarea>
                    </td>
                    <td>
                        <input type="number" class="form-control" id="stock" name="stock" value="<?= $row['stock'] ?>">
                    </td>
                    <td><?= $row['lastmodified'] ?></td>
                    <td>
                        <?php if ($refer === 'admin'): ?>
                            <button type="submit" name="delete" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
                        <?php elseif ($refer === 'dashboard'): ?>
                            <button type="submit" name="update" value="<?= $row['id'] ?>" class="btn btn-success">Update</button>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?= form_close() ?>
        </tbody>
    </table>
</div>
</section>