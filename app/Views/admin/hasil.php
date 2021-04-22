<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row mt-3">
            <div class="col px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>HASIL TOEFL</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                        <form action="/hasil">
                        <div class="input-group mb-3">
                            <input type="date" name="q" class="form-control" value="<?= @$_GET['q'] ?>">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </div>
                        </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th width="50">#</th>
                                    <th>Nama</th>
                                    <th width="120">Reading</th>
                                    <th width="120">Listening</th> 
                                    <th width="120">Structure</th> 
                                    <th width="120">Score</th> 
                                </tr>
                                <?php
                                    $no=0;
                                    foreach ($hasil as $row):
                                ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['r'] ?></td>
                                        <td><?= $row['l'] ?></td>
                                        <td><?= $row['s'] ?></td>
                                        <td><?= ($row['r'] && $row['l'] && $row['s']) ? (($row['r']+$row['l']+$row['s'])/3)*10 : '' ?></td>
                                    </tr>
                                <?php  
                                    endforeach;
                                ?>
                            </table>
                            <?php echo $pager->links('hasil', 'bs_paginate'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>