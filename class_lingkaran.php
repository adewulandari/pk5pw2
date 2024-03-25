<?php
class Lingkaran {
    private $jari;
    const PHI = 3.14;
    
    public function __construct($r)
    {
        $this->jari = $r;
    }
    
    public function getJari()
    {
        return $this->jari;
    }

    public function setJari($r)
    {
        $this->jari = $r;
    }

    public function getLuas()
    {
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}

$lingkaran = new Lingkaran(7); 
echo "Jari-jari Lingkaran: " . $lingkaran->getJari() . "<br>"; 
echo "Luas Lingkaran: " . $lingkaran->getLuas() . "<br>"; 
echo "Keliling Lingkaran: " . $lingkaran->getKeliling(); 
?>
