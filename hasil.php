<?php
require_once 'form_nilaimahasiswa.php';
$nama_siswa = $_POST['nama'];
$mata_kuliah = $_POST['matkul'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$hna = ($nilai_uts * 30/100) + ($nilai_uas * 35/100) + ($nilai_tugas * 35/100);
$ket = hna($hna);
$grade = grade($hna);
$komentar = komentar($grade);



echo 'Nama : '.$nama_siswa;
echo '<br/>Mata Kuliah : '.$mata_kuliah;
echo '<br/>Nilai UTS : '.$nilai_uts;
echo '<br/>Nilai UAS : '.$nilai_uas;
echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
echo '<br/> Keterangan : '.$ket;
echo '<br/> Grade : '.$grade;
echo '<br/> Komentar : '.$komentar;


// Pernyataan
// if ($hna > 55 ) {
//     echo '</br>Siswa Lulus';
// }
// else {
//     echo '</br>Siswa Tidak Lulus';
// }

// Grade
// if ($hna > 0 && $hna <= 35){
//     $grade = 'E';
//     echo '<br> Grade : '.$grade; 
// }
// elseif ($hna > 36 && $hna <= 55){
//     $grade = 'D';
//     echo '<br> Grade : '.$grade;
// }
// elseif ($hna > 56 && $hna <= 69){
//     $grade = 'C';
//     echo '<br> Grade : '.$grade;
// }
// elseif ($hna > 70 && $hna <= 84){
//     $grade = 'B';
//     echo '<br> Grade : '.$grade;
// }
// elseif ($hna > 85 && $hna <= 100){
//     $grade = 'A';
//     echo '<br> Grade : '.$grade;
// }
// else {
//     $grade = 'I';
//     echo '<br> Grade : '.$grade;
// }

// Keterangan 
// $ket = $grade;
// switch ($ket) {
//     case "A" :
//         echo "</br> Sangat Memuaskan";
//         break;

//     case "B" :
//         echo "</br> Memuaskan";
//         break;
    
//     case "C" :
//         echo "</br> Cukup";
//         break;
    
//     case "D" :
//         echo "</br> Kurang";
//         break;

//     case "E" :
//         echo "</br> Sangat Kurang";
//         break;
    
//     default:
//         echo "Tidak Ada";
// }
?>