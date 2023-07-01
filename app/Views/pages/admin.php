<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <h5 class="card-title">Tambah Obat</h5>
            <?= form_open('admin/add') ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Obat</label>
                    <input type="text" class="form-control" id="name" name="name" maxlength="65" required placeholder="Matricaria chamomilla">
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="The main constituents are polyphenol compounds (apigenin, quercetin, patuletin, and luteolins)"></textarea>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Dosis</label>
                    <input type="number" class="form-control" id="stock" name="stock" required placeholder="100">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
