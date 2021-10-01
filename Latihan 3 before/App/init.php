<?php 

// require_once 'Produk/infoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// memanggil fungsi ketika class2 sudah diload
spl_autoload_register(function( $class ){
	require_once __DIR__.'/Produk/' . $class . '.php'; //fungsi melihat class apa aja yg sudah teregistrasi di folder produk
});

 ?>