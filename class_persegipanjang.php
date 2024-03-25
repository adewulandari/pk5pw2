<?php
class PersegiPanjang{
    private $panjang;
    private $lebar;

    function __construct($p, $l)
    {
        $this->panjang = $p;
        $this->lebar = $l;
    }

    function getPanjang() {
        return $this->panjang;
    }

    function setPanjang($p) {
        $this->panjang = $p;
    }

    function getLebar() {
        return $this->lebar;
    }

    function setLebar($l) {
        $this->lebar = $l;
    }

    function getLuas()
    {
        return $this->panjang * $this->lebar;
    }

    function getKeliling()
    {
        return 2 * ($this->panjang + $this->lebar);
    }
}

$persegiPanjang = new PersegiPanjang(5, 3); 
echo "Panjang: " . $persegiPanjang->getPanjang() . "<br>"; 
echo "Lebar: " . $persegiPanjang->getLebar() . "<br>";  
echo "Luas: " . $persegiPanjang->getLuas() . "<br>"; // Output luas
echo "Keliling: " . $persegiPanjang->getKeliling(); // Output keliling
?>
