<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " saya adalah Siswa XII-RPL";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = " ";
    function lokal(){
        $skil = " saya bisa Coding dan Desain";
        echo $skil;
    }
    lokal();
    echo $skil;

?>