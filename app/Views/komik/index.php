<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/komik/create" class="btn btn-primary my-3">Tambah Data Komik</a>
            <h1 class="my-3">Daftar Komik</h1>
            <?= session()->getFlashdata('pesan'); ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $i=1;
                    foreach($komik as $k): ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><img src="/img/<?= $k['sampul']; ?>" class="sampul" alt=""></td>
                        <td><?= $k['judul']; ?></td>
                        <td>
                            <a href="/komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>