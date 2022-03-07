<?php
phpinfo();

// definisikan variables
$nama = 'Rosalie Naurah';
$umur = 13;
$berat = 22.4;

echo 'Nama : ' . $nama;
echo '<br/>Umur : ' . $umur.' Tahun';
echo '<br/>Berat : '.$berat.' Kg';

// variable system
echo 'Dokumen Root '.$_SERVER["DOCUMENT_ROOT"];
echo '<br/>Nama File '.$_SERVER["PHP_SELF"];

// definisikan konstansta
define('PHI',3.14);
define('DBNAME','inventori');
define('DBSERVER','localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$kll = 2 * PHI * $jari;

echo 'Luas Lingkaran dengan Jari '.$jari.' : '.$luas;
echo '<br/>Kelilingnya : '.$kll;

?>