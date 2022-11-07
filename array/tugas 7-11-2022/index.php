<?php 

$kelas12rpl = ['erlangga','zidan','hasan','putra','haikal','adi','fayi','gustiar','adit','pratama'];
echo "SIAPA TEMAN FAVORIT MU?";

echo "<br />";

print_r($kelas12rpl);

echo "<br />";
echo "<hr />";

array_push($kelas12rpl, 'zidan','hasan');
echo "2 TAMBAHAN";
echo "<br />";
echo $kelas12rpl[10];
echo " ";
echo $kelas12rpl[11];
echo "<hr />";
echo "TOTAL TEMAN FAVORIT : ";
echo "<br />";
print_r($kelas12rpl);
echo "<hr />";

?>