<?php 

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shoen Jump", 30000, 100); 
$produk2 = new Game("Clash", "Supercel", "Tencent", 100000, 50); 

// instant buat cetak produk
$cetakProduk = new CetakInfoProduk();
$cetakProduk->produk( $produk1 );
$cetakProduk->produk( $produk2 );
echo $cetakProduk->cetak();



 ?>