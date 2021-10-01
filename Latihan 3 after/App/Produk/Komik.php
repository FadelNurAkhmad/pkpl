<?php 

class komik extends Produk implements InfoProduk{

		public $jmlHalaman;

		public function __construct(  $namaJudul = "judul", $namaPenulis = "penulis", $namaPenerbit = "penerbit", $totalHarga = 0, $jmlHalaman = 0 ){

			parent::__construct(  $namaJudul, $namaPenulis , $namaPenerbit , $totalHarga ); 

			$this->jmlHalaman = $jmlHalaman; 
	}

	public function getInfo(){
		$str = "{$this->namaJudul} | {$this->getLabel()} (Rp. {$this->totalHarga})";
		
		return $str;

	}

	public function  getInfoProduk(){
		$str = "Komik : ". $this->getInfo() ." - {$this->jmlHalaman} Halaman."; 
		
		return $str;
	}
}

 ?>