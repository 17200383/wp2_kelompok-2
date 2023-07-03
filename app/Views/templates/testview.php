<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">View</h5>
            <?= form_open('test/view') ?>
                <div class="mb-3">
                    <label for="namepat" class="form-label">Patient Name</label>
                    <input type="text" class="form-control" id="namepat" name="namepat" placeholder="Enter pat name">
                </div>
                <button type="submit" class="btn btn-primary">View</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
