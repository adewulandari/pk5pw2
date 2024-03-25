<?php
class NilaiMahasiswa
{
    private $nim;
    private $matkul;
    private $nilai;

    public function __construct($nim, $matkul, $nilai)
    {
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
    }

    public function getNIM()
    {
        return $this->nim;
    }

    public function getMatkul()
    {
        return $this->matkul;
    }

    public function getNilai()
    {
        return $this->nilai;
    }

    public function kelulusan()
    {
        return $this->nilai < 56 ? "TIDAK LULUS" : "LULUS";
    }

    public function hasil()
    {
        if ($this->nilai > 0 && $this->nilai <= 35) {
            return "E";
        } else if ($this->nilai <= 55) {
            return "D";
        } else if ($this->nilai <= 69) {
            return "C";
        } else if ($this->nilai <= 84) {
            return "B";
        } else if ($this->nilai <= 100) {
            return "A";
        }
    }
}


$nilai_mahasiswa = new NilaiMahasiswa("0110223169", "Matematika", 75);
echo "NIM: " . $nilai_mahasiswa->getNIM() . "<br>";
echo "Mata Kuliah: " . $nilai_mahasiswa->getMatkul() . "<br>";
echo "Nilai: " . $nilai_mahasiswa->getNilai() . "<br>";
echo "Kelulusan: " . $nilai_mahasiswa->kelulusan() . "<br>";
echo "Hasil: " . $nilai_mahasiswa->hasil();
?>
