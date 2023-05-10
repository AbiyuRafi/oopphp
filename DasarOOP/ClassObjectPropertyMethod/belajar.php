<?php

class Kendaraan{

    public$nama,
        $warna,
        $harga;

    public function __construct( $nama, $warna, $harga){
        $this->nama = $nama;
        $this->warna = $warna;
        $this->harga = $harga;
    }
    
    public function infoKendaraan(){
         return "Nama Kendaraan: {$this->nama} <br>
                Warna: {$this->warna} <br>
                Harga: {$this->harga} <br>";
    }
}

$mobil = new Kendaraan("Civic", "Ungu", 50000);


$motor = new Kendaraan("Vespa", "Putih", 200000);

echo $mobil->infoKendaraan();
echo '<br>';
echo "<br>";
echo $motor->infoKendaraan();