<?php

class Buku {
   
    public string $judul;
    public string $penulis;
    public string $tahunTerbit;
    
  
    public function tampilkanInformasi(): void {
        echo "Judul: " . $this->judul . "<br>";
        echo "Penulis: " . $this->penulis . "<br>";
        echo "Tahun Terbit: " . $this->tahunTerbit . "<br>";
    }
}


$buku1 = new Buku();
$buku1->judul = "Sistem Digital";
$buku1->penulis = "Raysa Oktavia";
$buku1->tahunTerbit = "2024";


$buku2 = new Buku();
$buku2->judul = "Bahasa Indonesia";
$buku2->penulis = "Dadan Priyadi";
$buku2->tahunTerbit = "2023";


$buku1->tampilkanInformasi();
$buku2->tampilkanInformasi();
?>