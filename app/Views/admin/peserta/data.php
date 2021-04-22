<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row mt-3">
            <div class="col px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>PESERTA TOEFL</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <a href="/peserta/tambah" class="btn btn-primary">Tambah Peserta</a>
                        </div>
                        <div class="col-9">
                        <form action="/peserta">
                        <div class="input-group mb-3">
                            <input type="text" name="q" class="form-control" placeholder="Cari Peserta" value="<?= @$_GET['q'] ?>">
                            <button class="btn btn-success"><i class="fa fa-search"></i></button>
                        </div>
                        </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>No. Peserta</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Password</th> 
                                    <th>Aksi</th> 
                                </tr>
                                <?php
                                    foreach ($user as $row):
                                ?>
                                    <tr>
                                        <td><?= $row['id_user'] ?></td>
                                        <td><?= $row['nama'] ?></td>
                                        <td><?= $row['username'] ?></td>
                                        <td><?= $row['password'] ?></td>
                                        <td class="text-center">
                                        <a href="/peserta/<?= $row['id_user'] ?>/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="/peserta/<?= $row['id_user'] ?>" class="d-inline" method="post">
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