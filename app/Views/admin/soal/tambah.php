<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row justify-content-center mt-3">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>TAMBAH SOAL</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <a href="/soal" class="btn btn-primary">< </a>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <form action="/soal" method="post">
                            <div class="mb-3">
                                <label class="form-label">Section</label>
                                <select class="form-select" id="select" name="section">
                                <option value="">--</option>
                                <?php
                                    foreach ($topik as $r) {
                                        echo "<option value='{$r['id_bagian']}'>{$r['nm_section']}</option>";
                                    }
                                ?>                 
                                </select>
                            </div>
                            <div class="mb-3" id="formTopik">
                                <label class="form-label">Topik</label>
                                <select class="form-select" id="topik" name="topik"></select>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">No Soal</label>
                            <input type="text" class="form-control" name="no">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Soal</label>
                            <textarea class="form-control" rows="3" name="soal"></textarea>
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi A</label>
                            <input type="text" class="form-control" name="a">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi B</label>
                            <input type="text" class="form-control" name="b">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi C</label>
                            <input type="text" class="form-control" name="c">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Opsi D</label>
                            <input type="text" class="form-control" name="d">
                            </div>
                            <div class="mb-3">
                            <label class="form-label">Jawaban</label>
                                <select class="form-select" name="jawab">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url('assets/js/select.js') ?>"></script>

<?= $this->endSection() ?>