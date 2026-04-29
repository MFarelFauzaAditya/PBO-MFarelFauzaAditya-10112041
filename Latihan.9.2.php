<?php

//class manusia
class manusia{
    //menentukan property dengan protected
    protected $nama = "Ardi";
    var $kelas = "SI 2";

    //method protected (hanya bisa diakses di dalam class ini atau turunannya)
    protected function nama(){
        return "Nama : " .$this->nama;
    }

    //method public (bisa diakses dari luar)
    public function tampilkan_nama(){
        return $this->nama();
    }

    public function tampilkan_kelas(){
        return "Kelas : " .$this->kelas;
    }

}

//instansiasi class manusia
$manusia = new manusia();

//sekarang keduanya bisa dipanggil tanpa error
echo $manusia->tampilkan_nama()."<br />";
echo $manusia->tampilkan_kelas();

?>