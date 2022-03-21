<?php
//Nama : Nurmila Fauziyah
//Rombel : SI03
//NIM : 0110121063
class PersegiPanjang { //class persegi panjang untuk mencari luas dan keliling persegi panjang
    //property atau variabel (bersifat publik, bisa diakses di dalam maupun di luar kelas persegi panjang)
    public $panjang; //variabel atau property panjang persegi panjang
    public $lebar; //variabel atau property lebar persegi panjang

    //method atau fungsi
    function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function getLuas(){ //fungsi atau method untuk menghitung dan mengembalikan nilai luas persegi panjang
        return $this->panjang * $this->lebar;
    }
    function getKeliling(){ //fungsi atau method untuk menghitung dan mengembalikan nilai keliling persegi panjang
        return 2 * ($this->panjang + $this->lebar);
    }
}
$persegiPanjang1 = new PersegiPanjang(15, 10);
$persegiPanjang2 = new PersegiPanjang(20, 10);
//mencetak luas persegi panjang
echo "<b>LUAS PERSEGI PANJANG</b>";
echo "<br/>Luas Persegi Panjang I adalah " . $persegiPanjang1->getLuas() . " cm^2";
echo "<br/>Luas Persegi Panjang II adalah " . $persegiPanjang2->getLuas() . " cm^2";
//mencetak keliling persegi panjang
echo "<br/>";
echo "<br/><b>KELILING PERSEGI PANJANG</b>";
echo "<br/>Keliling Persegi Panjang I adalah " . $persegiPanjang1->getKeliling() . " cm";
echo "<br/>Keliling Persegi Panjang II adalah " . $persegiPanjang2->getKeliling() . " cm";

?>