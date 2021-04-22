<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav') ?>

    <div class="container main-container">
        <div class="row justify-content-center text-center">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3 border-bottom">
                    <div class="col-9">
                        <h5>FINISH SECTION</h5>
                    </div>
                    <div class="col-3 border-start border-end">
                        <h4 id="countdown">00:00:00</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                        <h6>End of Reading Section</h6>
                        <p>You have seen all of the questions in the Reading Section.
                        <br>You can go back and check your work as long as there is time left.</p>
                        <p>Click on Return to check your work.</p>
                        <p>Click on Review to see the review screen for this section.</p>
                        <p>Click on the Proceed button to go on.</p>
                        <p>Once you leave this Reading Section, you WILL NOT be able to return.</p>

                        <div class="mt-5">
                            <a href="/exam/<?= $n_soal ?>" class="btn btn-primary">< Back</a>
                            <a href="/finish" class="btn btn-danger">Finish Exam</a> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/js/countdown.js') ?>"></script>


<?= $this->endSection() ?>