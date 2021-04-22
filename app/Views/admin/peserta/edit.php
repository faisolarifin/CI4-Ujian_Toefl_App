<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row justify-content-center mt-3">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>EDIT PESERTA TOEFL</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="/peserta" class="btn btn-primary">< </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/peserta" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="<?= $user['id_user'] ?>">
                            <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="uname" value="<?= $user['username'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" name="pass" value="<?= $user['username'] ?>">
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>