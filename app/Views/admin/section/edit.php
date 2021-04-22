<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row justify-content-center mt-3">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>EDIT SECTION</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="/peserta" class="btn btn-primary">< </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/bagian" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="<?= $b['id_bagian'] ?>">
                            <div class="mb-3">
                            <label class="form-label">Section</label>
                            <input type="text" class="form-control" name="nm_s" value="<?= $b['nm_section'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Batas Waktu</label>
                            <input type="number" class="form-control" name="time" value="<?= $b['limit_time'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Ketarangan</label>
                            <input type="text" class="form-control" name="ket" value="<?= $b['keterangan'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Direction</label>
                            <textarea class="form-control" rows="3" name="dirc"><?= $b['direction'] ?></textarea>
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