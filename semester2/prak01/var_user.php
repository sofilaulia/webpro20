<?php
    $nama = 'Rosalie Naurah';
    $umur = 13;
    $berat = 22.4;

    echo 'Nama: ' . $nama;
    echo '<br/>Umur : ' . $umur . ' Tahun';
    echo '<br/>Berat : ' . $berat . ' KG';

    echo "<br/> Hello $nama apa kabar?";

    $x = 1;

    do {
    echo $x." ";
    $x++;
    } while ($x > 2);
    function salam($nama="nurul"){

        echo "Selamat Datang $nama";
    
    }
    
    
    salam();
    for ($x = 1; $x < 10; $x++) {
        echo $x." ";
      }
      $bil=7;

switch ($bil){

  case 1 : echo "A"; break;

  case 2 : echo "B"; break;

  case 3 : echo "C"; break;

  default : echo "D";


}
$nama = array("Faiz", "Aulia", "Alissa","Ocha"); 
echo $nama[3];
?>