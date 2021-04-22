<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-5 shadow p-5">
            
                <?php if ($session->has('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $session->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <h4>Welcome CBT Toefl Exam</h4>
                <small>please log in with the username and password that you get</small>
                <form action="/auth" method="post">
                    <div class="form-floating my-3">
                        <input type="text" name="username" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" id="usr" placeholder="Username">
                        <label for="usr">Username</label>
                        <div class="invalid-feedback">
                            <?= $validation->getError('username') ?>
                        </div>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?>" id="pwd" placeholder="Password">
                        <label for="pwd">Password</label>
                        <div class="invalid-feedback">
                            <?= $validation->getError('password') ?>
                        </div>
                    </div>
                    <div class="d-grid gap-2 mt-3">
                        <button type="submit" class="btn btn-info d-block">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>