<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row justify-content-center mt-3">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>TAMBAH PESERTA TOEFL</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="/peserta" class="btn btn-primary">< </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/peserta" method="post">
                            <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control <?= ($val->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama">
                            <div class="invalid-feedback">
                                <?= $val->getError('nama') ?>
                            </div>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control <?= ($val->hasError('uname')) ? 'is-invalid' : '' ?>" name="uname">
                            <div class="invalid-feedback">
                                <?= $val->getError('uname') ?>
                            </div>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control <?= ($val->hasError('pass')) ? 'is-invalid' : '' ?>" name="pass">
                            <div class="invalid-feedback">
                                <?= $val->getError('pass') ?>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>