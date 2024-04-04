<?php 
$konek = mysqli_connect("localhost", "kual2865_admin", "Desember26.", "kual2865_userdb");

$sql = mysqli_query($konek, "select * from CarbonDioxide where id_ruangan=3 order by id_co2 desc");
$data = mysqli_fetch_array($sql);
$co2 = $data['co2'];

//uji apabila nilai suhu belum ada, maka anggap suhu = 0
if($co2 == "") $co2 = 0.00;
//cetak nilai suhu
echo $co2;
?>