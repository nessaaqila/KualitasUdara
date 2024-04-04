<?php 
$konek = mysqli_connect("localhost", "kual2865_admin", "Desember26.", "kual2865_userdb");

$sql = mysqli_query($konek, "select * from Temperature where id_ruangan=1 order by id_suhu desc");
$data = mysqli_fetch_array($sql);
$suhu = $data['suhu'];

//uji apabila nilai suhu belum ada, maka anggap suhu = 0
if($suhu == "") $suhu = 0.00;
//cetak nilai suhu
echo $suhu;
?>