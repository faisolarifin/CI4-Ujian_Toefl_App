<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav') ?>

    <div class="container main-container">
        <div class="row">
            <div class="col px-5 py-4 shadow rounded">
                <div class="row mb-5 border-bottom pb-2">
                    <div class="col-1">
                        <a href="/section"><span class="badge bg-primary"> < back </span></a>
                    </div>
                    <div class="col-11">
                        <h5 class="text-center text-uppercase"><?= $data['nm_section'] ?></h5>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-8">
                        <?= $data['direction'] ?>
                        <a href="/start" class="btn btn-success">Start Exam</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>localStorage.removeItem("countdown")</script>

<?= $this->endSection() ?>