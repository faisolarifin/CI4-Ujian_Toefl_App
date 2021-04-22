<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav') ?>

    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-10 px-5 py-4 text-center rounded shadow menu">
                <a class="btn m-4 p-3 shadow-sm border-top" href="/section">
                    <i class="fa fa-puzzle-piece"></i>
                    <span class="badge bg-primary mt-2 d-block">Section</span>
                </a>
                <a class="btn m-4 p-3 shadow-sm border-top" href="/score">
                    <i class="fa fa fa-star"></i>
                    <span class="badge bg-primary mt-2 d-block">Score</span>
                </a>
                <br>
                <a class="btn m-4 p-3 shadow-sm border-top" href="#">
                    <i class="fa fa-question"></i>
                    <span class="badge bg-primary mt-2 d-block">Hint</span>
                </a>
                <a class="btn m-4 p-3 shadow-sm border-top" href="/logout">
                    <i class="fa fa-sign-out"></i>
                    <span class="badge bg-primary mt-2 d-block">Logout</span>
                </a>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>