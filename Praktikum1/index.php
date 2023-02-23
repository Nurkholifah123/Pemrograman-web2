<?php 
// iini sebuah komentar
/* ini juga sebuah komentar */
# ini komentar pake kres



// echo "Hallo world <br>";
// echo "Hallo world <br>";
//print_r("Nurkholifah <br>");
//var_dump("STT NURUL FIKRI");


// Membuat variable user
$nama = "Siti Nurkholifah";
$umur = 19;
$berat =70.2;
$mahasiswa = true;

//echo "Nama saya adalah $nama <br>";
//echo "Umur saya $umur <br>";
//echo "Berat badan saya mencapai $berat kg";

// Membuat variable sistem
//echo 'Documen Root'.$_SERVER["DOCUMENT_ROOT"];
//echo"<br>";
//echo 'Nama file'.$_SERVER["PHP_SELF"];



// Membuat variable konstanta
define('PHI', 3.14);
$jari =10;
$luas =PHI * $jari *$jari;
$keliling = 2 * PHI * $jari;

//echo "Luas lingkaran dengan jari jari $jari = $luas <br>";
//echo "Luas lingkaran dengan jari jari $jari = $keliling"



// Membuat Array
$programs = ["PHP", "Javascript", "HTML","CSS"];
//echo $programs[0];
//echo "Jumlah data variable programs sebanyak". count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";

}



?>

