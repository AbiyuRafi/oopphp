<?php

class Laptop
{
    public $layar;
    protected $keyboard;
    private $jmlhtombol;

    public function __construct($layar = "Hd", $keyboard = "qwerty", $jmlhtombol = "20")
    {
        $this->layar = $layar;
        $this->keyboard = $keyboard;
        $this->jmlhtombol = $jmlhtombol;
    }

    public function tombol()
    {
        return $this->jmlhtombol;
    }
}

class Keyboard extends Laptop
{
    public function Info()
    {
        return $this->keyboard;
    }
}

$barang = new Laptop();

echo "Layar : " . $barang->layar;
echo "<br>";
$barang = new Keyboard();
echo "Keyboard : " . $barang->Info();
echo "<br>";
echo "Jumlah Tombol : " . $barang->tombol();
