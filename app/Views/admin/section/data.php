<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row mt-3">
            <div class="col px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>LIST SECTION</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Section</th>
                                    <th>Batas Waktu</th>
                                    <th>Keterangan</th> 
                                    <th>Direction</th> 
                                    <th>Aksi</th> 
                                </tr>
                                <?php
                                    foreach ($section as $row):
                                ?>
                                    <tr>
                                        <td><?= $row['id_bagian'] ?></td>
                                        <td><?= $row['nm_section'] ?></td>
                                        <td><?= $row['limit_time'] ?> Menit</td>
                                        <td><?= $row['keterangan'] ?></td>
                                        <td><?= $row['direction'] ?></td>
                                        <td class="text-center">
                                        <a href="/bagian/<?= $row['id_bagian'] ?>/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        </td>
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