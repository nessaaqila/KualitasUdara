<?php 
$konek = mysqli_connect("localhost", "kual2865_admin", "Desember26.", "kual2865_userdb");

$sql = mysqli_query($konek, "select * from Humidity where id_ruangan=3 order by id_kelembaban desc");
$data = mysqli_fetch_array($sql);
$kelembaban = $data['kelembaban'];

//uji apabila nilai suhu belum ada, maka anggap suhu = 0
if($kelembaban == "") $kelembaban = 0.00;
//cetak nilai suhu
echo $kelembaban;
?>