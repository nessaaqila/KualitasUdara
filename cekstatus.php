<?php 
$konek = mysqli_connect("localhost", "kual2865_admin", "Desember26.", "kual2865_userdb");

$sql = mysqli_query($konek, "select * from AirStatus where id_ruangan=1 order by id_status desc");
$data = mysqli_fetch_array($sql);
$status = $data['status_udara'];

if($status == "") $status = "Tidak Pengap";
//cetak status
echo $status;
?>