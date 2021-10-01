<?php 

require_once 'App/init.php';

$produkPertama = new Komik("Naruto", "Masashi Kisimoto", "Shoen Jump", 30000, 100); 
$produkKedua = new Game("Clash", "Supercel", "Tencent", 100000, 50); 

// instant buat cetak produk
$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produkPertama );
$cetakProduk->tambahProduk( $produkKedua );
echo $cetakProduk->cetak();



 ?>