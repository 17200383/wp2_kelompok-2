<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <?= form_open('login/login') ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="****">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            <?= form_close() ?>
        </div>
    </div>
</div>
