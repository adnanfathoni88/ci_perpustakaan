<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="/dashboard" class="<?= isset($_SERVER['navAktif']) && $_SERVER['navAktif'] == 'dashboard' ? 'bg-dark' : '' ?>">Dashboard</a></li>
        <li><a href="/dashboard/admin" class="<?= isset($_SERVER['navAktif']) && $_SERVER['navAktif'] == 'admin' ? 'bg-dark' : '' ?>">Admin</a></li>
        <li><a href="/dashboard/anggota" class=<?= isset($_SERVER['navAktif']) &&  $_SERVER['navAktif'] == 'anggota' ? 'bg-dark' : '' ?>>Anggota</a></li>
        <li><a href="/dashboard/buku" class="<?= isset($_SERVER['navAktif']) && $_SERVER['navAktif'] == 'buku' ? 'bg-dark' : '' ?>">Buku</a></li>
        <li><a href="/dashboard/kategori" class="<?= isset($_SERVER['navAktif']) && $_SERVER['navAktif'] == 'kategori' ? 'bg-dark' : '' ?>">Kategori</a></li>
        <li><a href="/dashboard/peminjaman" class="<?= isset($_SERVER['navAktif']) && $_SERVER['navAktif'] == 'peminjaman' ? 'bg-dark' : '' ?>">Peminjaman</a></li>
        <li><a href="/dashboard/pengembalian" class="<?= isset($_SERVER['navAktif']) && $_SERVER['navAktif'] == 'pengembalian' ? 'bg-dark' : '' ?>">Pengembalian</a></li>
        <li><a href="/logout" onclick="return confirm('Anda Ingin Logout?')" >Logout</a></li>
    </ul>
</div>


<style>
    .sidebar {
        display: flex;
        justify-content: center;
        text-align: left;
        height: 90vh;
        background-color: #2C3333;
        transition: 200ms;

    }

    .sidebar ul {
        width: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .sidebar li {
        margin-top: 3%;

    }

    .sidebar a {
        width: 100%;
        display: block;
        padding: 10px;
        background-color: #2C3333;
        text-decoration: none;
        color: white;
        font-size: 20px;
        white-space: nowrap;
    }

    .sidebar a:hover {
        background-color: #282c2c;
    }

    @media (max-width: 768px) {
        .sidebar {
            width: 100%;
        }

        .sidebar ul {
            padding: 2%;
        }

        .sidebar li {
            margin-bottom: 2%;
        }
    }
</style>