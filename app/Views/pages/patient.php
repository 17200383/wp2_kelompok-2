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
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?= form_open('doctor/update') ?>
        <input type="hidden" name="refer" value="<?= $refer ?>">
            <?php foreach ($tableData2 as $row) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td>
                        <input type="text" class="form-control" id="namepat" name="namepat" value="<?= $row['namepat'] ?>" <?php if ($refer == 'doctor') { echo 'readonly'; } ?>>
                        <a class="btn btn-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            Data diri
                        </a>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                            <small>No. Telp : <?= $row ['telp'] ?> </small>
                            <br> 
                            <small>Alamat : <?= $row ['addr'] ?></small>
                            </div>
                        </div>
                        <!-- <small>No. Telp : <?= $row ['telp'] ?></small>
                        <small>Alamat : <?= $row ['addr'] ?></small> -->
                    </td>
                    <td>
                        <textarea class="form-control" rows="6" id="medrec" name="medrec" <?php if ($refer == 'dashboard') { echo 'readonly'; } ?> > <?= $row['medrec'] ?></textarea>
                    </td>
                    <td>
                        <select name="medicine" id="medicine" class="form-select" >
                            <?php foreach ($items as $item) : ?>
                                <option value="<?= $item['name'] ?>" <?php if ($item['name'] == $row['medicine']) { echo 'selected'; } ?>>
                                    <?= $item['name'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td><?= $row['lastmodified'] ?></td>
                    <td>
                        <?php if ($refer === 'admin'): ?>
                            <button type="submit" name="delete" value="<?= $row['id'] ?>" class="btn btn-danger">Delete</button>
                        <?php elseif ($refer === 'doctor') : ?>
                            <button type="submit" name="update" value="<?= $row['id'] ?>" class="btn btn-success">Update</button>
                        <?php elseif ($refer === 'dashboard') : ?>
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