<?php 
// variabel lokal hanya isi di akses dari scopr dimana dia di definisikan
$nama = "guanteng bingitsz";

function halodunia(){
    $nama = "Pak Saiful"; // variabel lokal
    echo $nama;
}

halodunia(); // objek

echo $nama;

?>