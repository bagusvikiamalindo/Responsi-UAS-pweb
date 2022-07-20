<?php 

$nama = $_POST['nama'];
$kodepesanan = $_POST['kodepesanan'];
$alamat = $_POST['alamat'];
$Rasa = $_POST['Rasa'];
$antrian = $_POST['antrian'];
$komentar = $_POST['komentar'];

echo "<head><title>My Guest Book</title></head>";
$fp = fopen("data.txt", "a+");
fputs($fp, "$nama|$kodepesanan|$alamat|$Rasa|$antrian|$komentar\n");
fclose($fp);

echo "<center><b>Terima kasih Telah Order pesanan</center></b> <br>";
echo "<a href='tampilan.php'><center>Isi Pesanan anda<center></a><br>";
echo "<a href='lihat.php'><center>Lihat Pesanan Anda<center></a><br>";


 ?>