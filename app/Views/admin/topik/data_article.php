<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<?= $this->include('template/nav_admin') ?>

    <div class="container main-container">
        <div class="row mt-3">
            <div class="col px-5 py-4 shadow rounded">
                <div class="row mb-3">
                    <div class="col text-center">
                        <h4>READING ARTICLE</h4>
                    </div>
                    <div class="row mt-4">
                        <div class="col-3">
                            <a href="/topik/article/tambah" class="btn btn-primary">Tambah Topik</a>
                        </div>
                        <div class="col-9">
                        <form action="/topik">
                        <div class="input-group mb-3">
                            <input type="text" name="q" class="form-control" placeholder="Cari Topik" value="<?= @$_GET['q'] ?>">
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
                                    <th width="120">Nama Topik</th>
                                    <th>Content</th>
                                    <th width="120">Aksi</th> 
                                </tr>
                                <?php
                                    $no=0;
                                    foreach ($topik as $row):
                                ?>
                                    <tr>
                                        <td><?= ++$no ?></td>
                                        <td><?= $row['nm_topik'] ?></td>
                                        <td><?= $row['content'] ?></td>
                                        <td class="text-center">
                                        <a href="/topik/article/<?= $row['id_topik'] ?>/edit" class="btn btn-warning my-1 btn-sm"><i class="fa fa-edit"></i></a>
                                        <form action="/topik/<?= $row['id_topik'] ?>" class="d-inline" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
                                        </td>
                                    </tr>
                                <?php  
                                    endforeach;
                                ?>
                            </table>
                            <?php echo $pager->links('topik', 'bs_paginate'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>