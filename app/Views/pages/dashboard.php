<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add</h5>
            <?= form_open('dashboard/add') ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Medicine Name</label>
                    <input type="text" class="form-control" id="namename" name="name" maxlength="65" required placeholder="Matricaria chamomilla">
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label">Comments</label>
                    <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="The main constituents are polyphenol compounds (apigenin, quercetin, patuletin, and luteolin)s"></textarea>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="tel" class="form-control" id="stock" name="stock" maxlength="11" required placeholder="12">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
