<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row justify-content-center mt-3">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>TAMBAH READING ARTICLE</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="/topik/article" class="btn btn-primary">< </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/topik/article" method="post">
                            <div class="mb-3">
                            <label class="form-label">Nama Topik</label>
                            <input type="text" class="form-control <?= ($val->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama">
                            <div class="invalid-feedback">
                                <?= $val->getError('nama') ?>
                            </div>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Article</label>
                            <textarea class="form-control <?= ($val->hasError('article')) ? 'is-invalid' : '' ?>" rows="5" name="article"></textarea>
                            <div class="invalid-feedback">
                                <?= $val->getError('article') ?>
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