<div class="container d-flex justify-content-center align-items-center">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add</h5>
            <?= form_open('test/add') ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" maxlength="65" required placeholder="Enter your username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" minlength="4" required placeholder="Enter your password">
                </div>
                <div class="mb-3">
                    <label for="privilege" class="form-label">Privilege</label>
                    <input type="tel" class="form-control" id="privilege" name="privilege" maxlength="1" required placeholder="Enter Privilege (1/2)">
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
