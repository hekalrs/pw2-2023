<?php 
    require_once 'dbkoneksi.php';

    if(isset($_GET['iddel'])) {
        $iddel = $_GET['iddel'];
        $sql = "DELETE FROM produk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$iddel]);
        $row = $st->fetch();
        echo "Data pelanggan dengan ID $iddel berhasil dihapus";
    } else {
        echo "ID pelanggan yang akan dihapus tidak ditemukan";
    }
?>