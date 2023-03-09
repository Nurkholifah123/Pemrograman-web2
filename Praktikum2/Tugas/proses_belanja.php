<?php
//mengambil data input
$nama= $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$total_harga = ($produk + $jumlah);

   if ($barang == 'TV'){
       $total_harga = 4200000 * $jumlah ;
    } elseif ($barang == 'Kulkas'){
       $total_harga = 3100000 * $jumlah ;
    } elseif ($barang == 'Mesin Cuci'){
       $total_harga= 3800000 * $jumlah ;
    } else {
       $total_harga = '';
    }

?>