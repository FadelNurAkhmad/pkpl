<?php 

class game extends Produk implements InfoProduk{

	public $wktMain;

	public function __construct(  $namaJudul = "judul", $namaPenulis = "penulis", $namaPenerbit = "penerbit", $totalHarga = 0, $wktMain = 0 ){

		parent::__construct (  $namaJudul, $namaPenulis, $namaPenerbit, $totalHarga );

		$this->wktMain = $wktMain;

	}

	public function getInfo(){
		$str = "{$this->namaJudul} | {$this->getLabel()} (Rp. {$this->totalHarga})";
		
		return $str;

	}

	public function getInfoProduk(){
		$str = "Game : ". $this->getInfo()." - {$this->wktMain} Jam.";

		return $str;
	}
}

 ?>