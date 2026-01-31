<?php 
include 'koneksi.php';
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard'; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>E-Commerce Admin - Full System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sidebar">
        <h2>E-Commerce Admin</h2>
        <nav>
            <p><strong>Master Data</strong></p>
            <a href="index.php?page=produk" class="<?= $page == 'produk' ? 'active' : '' ?>">📦 Produk</a>
            <a href="index.php?page=pelanggan" class="<?= $page == 'pelanggan' ? 'active' : '' ?>">👥 Pelanggan</a>
            <a href="index.php?page=kategori" class="<?= $page == 'kategori' ? 'active' : '' ?>">🏷️ Kategori</a>
            <a href="index.php?page=supplier" class="<?= $page == 'supplier' ? 'active' : '' ?>">🏭 Supplier</a>
            <a href="index.php?page=karyawan" class="<?= $page == 'karyawan' ? 'active' : '' ?>">👨‍💼 Karyawan</a>
            <a href="index.php?page=gudang" class="<?= $page == 'gudang' ? 'active' : '' ?>">🏠 Gudang</a>
            <a href="index.php?page=metode" class="<?= $page == 'metode' ? 'active' : '' ?>">💳 Metode Bayar</a>
            <a href="index.php?page=kurir" class="<?= $page == 'kurir' ? 'active' : '' ?>">🚚 Kurir</a>

            <p><strong>Transaksi</strong></p>
            <a href="index.php?page=penjualan" class="<?= $page == 'penjualan' ? 'active' : '' ?>">🛒 Penjualan</a>
            <a href="index.php?page=pembelian" class="<?= $page == 'pembelian' ? 'active' : '' ?>">🛍️ Pembelian</a>
            <a href="index.php?page=retur" class="<?= $page == 'retur' ? 'active' : '' ?>">↩️ Retur</a>
            <a href="index.php?page=stok_opname" class="<?= $page == 'stok_opname' ? 'active' : '' ?>">📉 Stok Opname</a>
            <a href="index.php?page=detail_jual" class="<?= $page == 'detail_jual' ? 'active' : '' ?>">📋 Detail Jual</a>
        </nav>
    </div>

    <div class="main-content">
        <?php 
        switch ($page) {
            // MASTER DATA CASES
            case 'produk': include 'pages/produk.php'; break;
            case 'pelanggan': include 'pages/pelanggan.php'; break;
            case 'kategori': include 'pages/kategori.php'; break;
            case 'supplier': include 'pages/supplier.php'; break;
            case 'karyawan': include 'pages/karyawan.php'; break;
            case 'gudang': include 'pages/gudang.php'; break;
            case 'metode': include 'pages/metode.php'; break;
            case 'kurir': include 'pages/kurir.php'; break;

            // TRANSAKSI CASES
            case 'penjualan': include 'pages/penjualan.php'; break;
            case 'pembelian': include 'pages/pembelian.php'; break;
            case 'retur': include 'pages/retur.php'; break;
            case 'stok_opname': include 'pages/stok_opname.php'; break;
            case 'detail_jual': include 'pages/detail_jual.php'; break;
            
            default:
                echo "<h2>Dashboard</h2><p>Selamat Datang di Dashboard Admin.</p>";
                break;
        }
        ?>
    </div>
</body>
</html>