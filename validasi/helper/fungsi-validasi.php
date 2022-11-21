<?php

function validasi(array $listinput){
    // Variabel berisi inputan form 
    $request = $_REQUEST;

    // perulangan untuk array terluar (berisi nama input)
    foreach ($listinput as $input => $listrules){
        echo "Periksa Input <strong>{$input}</strong><br>";

        // Perulangan untuk sub array (berisi nama rules)
        foreach ($listrules as $rules){
            echo "Rules <strong>{$rules}</strong><br>";
            // Pemeriksaan tiap rules 
            if ($rules === 'required') {
                $lolos = lolosRequired($request[$input]);
                // penerapan nilai bool true : false
                echo $lolos ? "Lolos" : "Tidak Lolos";
            }
            echo "<br>";
        }
        echo "<br>";
    }
}

function lolosRequired($nilai){
    return(bool)$nilai;
}

?>