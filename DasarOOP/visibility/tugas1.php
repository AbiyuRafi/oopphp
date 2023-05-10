<?php

class Sekolah
{
    public $nama;
    private $alamat;
    protected $jmlhsiswa,
        $jmlhguru,
        $jmlhkelas;

    public function __construct($nama = "Wikrama", $alamat = "Jl.Wangun", $jmlhsiswa = 20, $jmlhguru = 10, $jmlhkelas = 4)
    {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jmlhsiswa = $jmlhsiswa;
        $this->jmlhguru = $jmlhguru;
        $this->jmlhkelas = $jmlhkelas;
    }
    public function setAlamat($alamat){
        $this->alamat = $alamat;
    }
    public function getAlamat(){
        return $this->alamat;
    }
}


class Smk extends Sekolah
{

    public function setSiswa($jmlhsiswa){
        $this->jmlhsiswa = $jmlhsiswa;
    }
    public function getSiswa()
    {
        return $this->jmlhsiswa;
    }
    public function setGuru($jmlhguru){
        $this->jmlhguru = $jmlhguru;
    }
    public function getGuru(){
        return $this->jmlhguru;
    }
    public function setKelas($jmlhkelas){
        $this->jmlhkelas = $jmlhkelas;
    }
    public function getKelas()
    {
        return $this->jmlhkelas;
    }

}

$smk = new Sekolah();

echo "Nama Sekolah : " .$smk->nama;
echo "<br>";
echo "Alamatnya di : " .$smk->getAlamat();
echo "<br>";
$smk = new Smk();
echo "Jumlah Siswa : " .$smk->getSiswa();
echo "<br>";
echo "Jumlah Guru : " .$smk->getGuru();
echo "<br>";
echo "Jumlah Kelas : " .$smk->getKelas();



