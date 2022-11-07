<?php 

// array adalah tipe data yang berisi beberapa tipe data (string maupun integer)
// keynya diawali dengan angka 0 dst 

// Array asosiatif
// keynya berubah menjadi tio=pe data string

$siswa = [
    // keynya bisa int/string
    'sipalingganteng' => 'arjuna',
    'sipalingcantik' => 'nita',
    'sipalingnetral' => 'ahmad sandi',
];

// echo "siapa yang paling ganteng? {$siswa['1']};

// array Multidimension
// ada array di dalam array

$togel = [
    [1, 2, 3, 4, 5],
    [6, 7, 8, 9, 22],
    [12, 15, 13, 14, 51],
    [19, 21, 31, 47, 35]
];

// cara memanggil array 
// echo $togel[2][3];

// Array push 
// Array push berguna untuk menerima 2 parameter, parameter pertama : untuk target, parameter kedua untuk nilai yang dimasukkan 

$sayur = ['bayam','kangkung','sawi'];
$buah = ['pisang','kelapa','coklat'];

// cara pertama untuk menambahkan item 
array_push($buah, 'timun');

// cara yang kedua 
$sayur[] = 'labu';

echo $buah[3];
echo $sayur[3];

?>