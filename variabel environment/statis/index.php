<?php 
//statis adalah mempertahankan nilai aslinya

function test(){
    static $angka = 0; // mendefinisikan variabel
    // variabel lokal jika sudah melewati scopenya akan kembali ke nilai awal
    // static memoertahankan nilainya diluar scope
    echo "A : {$angka} <br>";
    $angka++; // menanmbahkan fungsi increment 
}

test();
test();
test();

?>