<?php include APPPATH . 'Views/dashboard/header.php'; ?>

<div class="container">
    <?php include APPPATH . 'Views/dashboard/sidebar.php'; ?>
    <div class="content" id="content">
        <h1>Data Buku</h1>
        <div>
            <a href="/add-buku" class="btn btn-primary">Tambah</a>
        </div>
        <?php if(session()->getFlashdata('success')) : ?>
        <div class="alert alert-success mt-2">
            <?= session()->getFlashdata('success') ?>
        </div>
        <?php endif; ?>
        <table class="table table-bordered table-striped mt-2">
            <thead class="table-primary">
                <tr>
                    <th>Nomor</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Jumlah Halaman</th>
                    <th>Sinopsis</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($buku as $b) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $b->judul; ?></td>
                        <td><?= $b->pengarang; ?></td>
                        <td><?= $b->penerbit; ?></td>
                        <td><?= $b->tahun_terbit; ?></td>
                        <td><?= $b->jumlah_halaman; ?></td>
                        <td><?= $b->sinopsis; ?></td>
                        <td>
                            <a href="/edit-buku/<?= $b->id; ?>" class="btn btn-warning">edit</a>
                            <a href="/edit-buku/<?= $b->id; ?>" class="btn btn-danger">hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include APPPATH . 'Views/dashboard/footer.php'; ?>

