<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Read</h5>
            <?= form_open('test/read') ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                </div>
                <div class="mb-3">
                    <label for="colname" class="form-label">Column Name</label>
                    <input type="text" class="form-control" id="colname" name="colname" placeholder="Enter column name">
                </div>
                <button type="submit" class="btn btn-primary">Read</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
