<?php 

class Nilai {

    function nilaiGenap(){
        # perulangan akan dilakukan selama variabel $i bukan kelipatan 2
        for ($i=0; $i < 20; $i++){
    
        # ubah nilai $rand secara random dari angka 1-100
        $rand = mt_rand(0, 100);
        if($rand % 2 == 0) {
            echo "Nilai Genap = {$rand} <br>";
        
            }
        }
    }
}

$CetakNilai = new Nilai();

echo $CetakNilai->nilaiGenap();

?>
