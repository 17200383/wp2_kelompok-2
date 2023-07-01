<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title">Tambah Pasien</h5>
            <?= form_open('doctor/add') ?>
                <div class="mb-3">
                    <label for="namepat" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" id="namepat" name="namepat" maxlength="65" required placeholder="Jane Miria">
                </div>
                <div class="mb-3">
                    <label for="medrec" class="form-label">Keluhan</label>
                    <textarea class="form-control" id="medrec" name="medrec" rows="3" placeholder="22F a/w 2/7 dysuria & N+V bg T1DM. BM 20.8, VBG ph 7.24 HCO3 12, Urin Leuk+ Nit+ Ket+++. Obs stable, HR 136 -> 98 (1L NaCl)"></textarea>
                </div>
                <div class="mb-3">
                <select name="medicine" id="medicine" class="form-select">
                    <?php foreach ($items as $item) : ?>
                        <option value="<?= $item['name'] ?>"><?= $item['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
