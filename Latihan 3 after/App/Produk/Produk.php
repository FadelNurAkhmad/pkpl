<?php 

abstract class Produk {

	protected 	$namaJudul , 
		   		$namaPenulis,
		   		$namanamaPenerbit,
		   		$totaltotalHarga,
		   		$totalDiskon;

    public function __construct( $namaJudul = "judul", $namaPenulis = "penulis", $namaPenerbit = "penerbit", $totalHarga = 0){  

    	$this->namaJudul = $namaJudul;
    	$this->namaPenulis = $namaPenulis;
    	$this->namaPenerbit = $namaPenerbit;
    	$this->totalHarga = $totalHarga;
    } 

    public function setJudul( $namaJudul ){
    	$this->namaJudul = $namaJudul;
    }

    public function getJudul() {
    	return $this->namaJudul;
    }

    public function setPenulis($namaPenulis){
    	$this->namaPenulis = $namaPenulis;
    }
    public function getPenulis(){
    	return $this->namaPenulis;
    }

     public function setPenerbit($namaPenerbit){
    	$this->namaPenerbit = $namaPenerbit;
    }
    public function getPenerbit(){
    	return $this->namaPenerbit;
    }

    public function setDiskon( $totalDiskon ){
    	$this->totalDiskon = $totalDiskon;
    }
    public function fetDiskon(){
    	return $this->totalDiskon;
    }

     public function setHarga($totalHarga){
    	$this->totalHarga = $totalHarga;
    }


    public function getHarga(){
		return $this->totalHarga - ( $this->totalHarga * $this->totalDiskon / 100 );
	}

	public function getLabel(){
		return "$this->namaPenulis, $this->namaPenerbit"; 
	}

	abstract public function getInfo();

	
}

 ?>