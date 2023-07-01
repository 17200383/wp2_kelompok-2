<section style="padding-top: 5em;">
<div class="container  justify-content-center align-items-center">
    <h2>Daftar Pasien</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Keluhan</th>
                <th>Obat</th>
                <th>Tanggal</th>
                <th>Simpan</th>
            </tr>
        </thead>
        <tbody>
        <?= form_open('doctor/update') ?>
        <?php foreach ($tableData2 as $row) : ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td>
                    <input type="text" class="form-control" id="namepat" name="namepat" value="<?= $row['namepat'] ?>" <?php if ($refer != 'admin') { echo 'readonly'; } ?>>
                </td>
                <td>
                    <textarea class="form-control" rows="6" id="medrec" name="medrec"><?= $row['medrec'] ?></textarea>
                </td>
                <td>
                    <select name="medicine" id="medicine" class="form-select">
                        <?php foreach ($items as $item) : ?>
                            <option value="<?= $item['name'] ?>" <?php if ($item['name'] == $row['medicine']) { echo 'selected'; } ?>>
                                <?= $item['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
                <td><?= $row['lastmodified'] ?></td>
                <td>
                    <button type="submit" name="update" value="<?= $row['id'] ?>" class="btn btn-success">Update</button>
                </td>
            </tr>
        <?php endforeach; ?>
        <?= form_close() ?>
        </tbody>
    </table>
</div>
</section>