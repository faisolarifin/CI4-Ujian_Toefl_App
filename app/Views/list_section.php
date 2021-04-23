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
                        <h4>TOEFL SECTION </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <?php
                            foreach($data as $row):
                        ?>
                        <div class="shadow-sm p-3 mb-3 bg-body rounded border">
                            <div class="row">
                                <div class="col-6">
                                    <p><?= $row['nm_section'] ?></p>
                                    <small><?= $row['keterangan'] ?></small>
                                </div>
                                <div class="col-4">
                                    <p><?= $row['limit_time'] ?> Minute</p>
                                    <small><?= $row['jml_soal'] ?> Question</small>
                                </div>
                                <div class="col">
                                    <?php
                                        if ($row['status'] == 'finish') :
                                            echo "<button class='btn btn-success float-end mt-2'>Complete</button>";
                                        elseif ($row['status'] == 'start') : ?>
                                
                                        <form action="/continue" method="post">
                                            <input type="hidden" name="idtes" value="<?= $row['id_tes'] ?>">
                                            <input type="hidden" name="idbagian" value="<?= $row['id_bagian'] ?>">
                                            <button type="submit" class="btn btn-warning float-end mt-2">Continue</button>
                                        </form>
                                    <?php
                                        else:
                                    ?>
                                        <form action="/direction" method="post">
                                            <input type="hidden" name="idtes" value="<?= $row['id_tes'] ?>">
                                            <input type="hidden" name="idbagian" value="<?= $row['id_bagian'] ?>">
                                            <button type="submit" class="btn btn-danger float-end mt-2">Start</button>
                                        </form>
                                    <?php
                                        endif;
                                    ?>
                                </div>  
                            </div> 
                        </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?= $this->endSection() ?>