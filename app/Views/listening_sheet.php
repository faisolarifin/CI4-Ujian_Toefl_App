<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav') ?>

    <div class="container main-container">
        <div class="row">
            <div class="col px-5 py-3 shadow rounded">
                <div class="row justify-content-end mb-3">
                    <div class="col-3">
                        <h4 class="text-center" id="countdown">00:00:00</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p><strong>Question <?= $no ?></strong></p>
                        <audio class="w-100" controls>
                            <source src="<?= base_url("listening/{$data['content']}") ?>" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                        <p class="ms-2 mt-4"><?= $data['soal'] ?></p>
                        <form action="/save/<?= $no ?>" method="post">
                        <div class="row">
                            <div class="col-8 ms-4 border">
                                <input type="hidden" name="id_soal" value="<?= $data['id_soal'] ?>">
                                <div class="form-check my-3">
                                    <input class="form-check-input" type="radio" name="jawaban" id="gridRadios1" value="A" <?= $jawab=='A' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios1">
                                        <?= $data['opsi_a'] ?>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="jawaban" id="gridRadios2" value="B" <?= $jawab=='B' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios2">
                                        <?= $data['opsi_b'] ?>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="jawaban" id="gridRadios3" value="C" <?= $jawab=='C' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios3">
                                        <?= $data['opsi_c'] ?>
                                    </label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="radio" name="jawaban" id="gridRadios4" value="D" <?= $jawab=='D' ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="gridRadios4">
                                        <?= $data['opsi_d'] ?>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col text-center">
                                <?= $no > 1 ? '<button type="submit" class="btn btn-primary btn-sm" name="back" value="back">< Back</button>' : ''; ?>
                                <a href="/exam/<?= ++$no ?>" class="btn btn-warning btn-sm mx-2">Skip</a>
                                <button type="submit" class="btn btn-primary btn-sm" name="next" value="next">Next ></button>                                                    
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var minutes = <?= $limit ?>;

        if (localStorage.getItem("countdown") === null)
        {
        var countDown = new Date(Date.now() + minutes*60000).getTime();
        localStorage.setItem("countdown", countDown);
        }
    </script>
    <script src="<?= base_url('assets/js/countdown.js') ?>"></script>


<?= $this->endSection() ?>