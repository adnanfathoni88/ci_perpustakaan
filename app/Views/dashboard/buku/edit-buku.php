<?php include APPPATH . 'Views/dashboard/header.php'; ?>

<div class="container">
    <?php include APPPATH . 'Views/dashboard/sidebar.php'; ?>
    <div class="content" id="content">
        <form action="/edit-buku" method="post">
        <h2>Edit Buku</h2>
        
            <div>
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control">
            </div>
            <div>
                <label for="pengarang">pengarang</label>
                <input type="text" name="pengarang" class="form-control" >
            </div>
            <div>
                <label for="penerbit">penerbit</label>
                <input type="text" name="penerbit" class="form-control" >
            </div>
            <div>
                <label for="tahun">tahun</label>
                <input type="text" name="tahun" class="form-control" >
            </div>
            <div>
                <label for="jumlah">jumlah halaman</label>
                <input type="text" name="jumlah" class="form-control" >
            </div>
            <div>
                <label for="sinopsis">sinopsis</label>
                <input type="text" name="sinopsis" class="form-control" >
            </div>
            <div>
                <button class="btn btn-primary mt-3" type="submit">Edit</button>                
            </div>
        </form>
    </div>
</div>

<?php include APPPATH . 'Views/dashboard/footer.php'; ?>
