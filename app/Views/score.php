<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav') ?>

    <div class="container main-container">
        <div class="row justify-content-center">
            <div class="col-10 px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col-1">
                        <a href="/home"><span class="badge bg-primary"> < back </span></a>
                    </div>
                    <div class="col-11 text-center">
                        <h4>TOEFL SCORE</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama :                          
                                <?php
                                    $session = \Config\Services::session();
                                    echo @$session->nama;
                                ?>
                                </td>
                            </tr>
                            <tr>
                                <td>Your Toefl Score : <strong><?= $score ?></strong></td>
                            </tr>
                        </table>
                        <table class="table mt-4 table-bordered table-striped">
                            
                            <tr>
                                <th>List Section</th>
                                <th>Correct</th>
                                <th>Number of Question</th>
                            </tr>
                            <?php
                                $sum=0;
                                foreach($data as $row):
                            ?>
                                <tr>
                                    <td><?= $row['nm_section'] ?></td>
                                    <td class="text-center"><?= $row['jml_benar'] ?></td>
                                    <td class="text-center">30</td>
                                </tr>
                            <?php
                                endforeach;
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>