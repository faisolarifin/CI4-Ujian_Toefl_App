<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row justify-content-center mt-3">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>EDIT SOAL</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="/soal" class="btn btn-primary">< </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/soal" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="<?= $s['id_soal'] ?>">
                            <div class="mb-3">
                                <label class="form-label">Section</label>
                                <select class="form-select" id="select" name="section">
                                <?php
                                    foreach ($topik as $r):
                                ?>
                                        <option value='<?= $r['id_bagian'] ?>' <?= $r['id_bagian']==$s['id_bagian'] ? 'selected' : '' ?> > <?= $r['nm_section'] ?></option>";
                                <?php
                                    endforeach;
                                ?>                 
                                </select>
                            </div>
                            <div class="mb-3" id="formTopik">
                                <label class="form-label">Topik</label>
                                <select class="form-select" id="topik" name="topik">
                                <option value="<?= $s['id_topik'] ?>"><?= $s['nm_topik'] ?></option>
                                </select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">No Soal</label>
                            <input type="text" class="form-control" name="no" value="<?= $s['no_soal'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Soal</label>
                            <textarea class="form-control" rows="3" name="soal"><?= $s['soal'] ?></textarea>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi A</label>
                            <input type="text" class="form-control" name="a" value="<?= $s['opsi_a'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi B</label>
                            <input type="text" class="form-control" name="b" value="<?= $s['opsi_b'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi C</label>
                            <input type="text" class="form-control" name="c" value="<?= $s['opsi_c'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi D</label>
                            <input type="text" class="form-control" name="d" value="<?= $s['opsi_d'] ?>">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jawaban</label>
                                <select class="form-select" name="jawab">
                                <option value="A" <?= $s['jawaban']=='A' ? 'selected' : '' ?>>A</option>
                                <option value="B" <?= $s['jawaban']=='B' ? 'selected' : '' ?>>B</option>
                                <option value="C" <?= $s['jawaban']=='C' ? 'selected' : '' ?>>C</option>
                                <option value="D" <?= $s['jawaban']=='D' ? 'selected' : '' ?>>D</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/select.js') ?>"></script>


<?= $this->endSection() ?>