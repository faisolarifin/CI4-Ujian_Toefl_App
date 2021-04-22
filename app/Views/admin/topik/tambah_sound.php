<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row justify-content-center mt-3">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>TAMBAH LISTENING SOUND</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="/topik/sound" class="btn btn-primary">< </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/topik/sound" method="post" enctype='multipart/form-data'>
                            <div class="mb-3">
                            <label class="form-label">Nama Topik</label>
                            <input type="text" class="form-control <?= ($val->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama">
                            <div class="invalid-feedback">
                                <?= $val->getError('nama') ?>
                            </div>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Sound</label>
                            <input class="form-control <?= ($val->hasError('sound')) ? 'is-invalid' : '' ?>" type="file" name="sound">
                            <div class="invalid-feedback">
                                <?= $val->getError('sound') ?>
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