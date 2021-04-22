<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row mt-3">
            <div class="col px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>SOAL <?= $sec ?></h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <a href="/soal/tambah" class="btn btn-primary">Tambah Soal</a>
                        </div>
                        <div class="col-9">
                        <form action="/soal">
                        <div class="input-group mb-3">
                            <input type="text" name="q" class="form-control" placeholder="Cari Soal" value="<?= @$_GET['q'] ?>">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </div>
                        </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No. Soal</th>
                                    <th>Topik</th>
                                    <th>Soal</th>
                                    <th>Opsi A</th>
                                    <th>Opsi B</th> 
                                    <th>Opsi C</th> 
                                    <th>Opsi D</th> 
                                    <th>Jawaban</th> 
                                    <th>Aksi</th> 
                                </tr>
                                <?php
                                    foreach ($soal as $row):
                                ?>
                                    <tr>
                                        <td><?= $row['no_soal'] ?></td>
                                        <td width="90px"><?= $row['nm_topik'] ?? '-' ?></td>
                                        <td><?= $row['soal'] ?></td>
                                        <td><?= $row['opsi_a'] ?></td>
                                        <td><?= $row['opsi_b'] ?></td>
                                        <td><?= $row['opsi_c'] ?></td>
                                        <td><?= $row['opsi_d'] ?></td>
                                        <td><?= $row['jawaban'] ?></td>
                                        <td class="text-center">
                                        <a href="/soal/<?= $row['id_soal'] ?>/edit" class="btn btn-warning my-1 btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="/soal/<?= $row['id_soal'] ?>" class="d-inline" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                        </td>
                                    </tr>
                                <?php  
                                    endforeach;
                                ?>
                            </table>
                            <?php echo $pager->links('user', 'bs_paginate'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>