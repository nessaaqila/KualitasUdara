<?php 
$konek = mysqli_connect("localhost", "kual2865_admin", "Desember26.", "kual2865_userdb");

//$sql = mysqli_query($konek, "select Temperature.suhu, Humidity.kelembaban, CarbonDioxide.co2 from Temperature join Humidity on Temperature.id_suhu=Humidity.id_kelembaban join CarbonDioxide on CarbonDioxide.id_co2=Humidity.id_kelembaban where Temperature.id_ruangan=3 and Humidity.id_ruangan=3 and CarbonDioxide.id_ruangan=3 order by Temperature.id_suhu desc");
$sql = mysqli_query($konek, "select * from AirStatus where id_ruangan=3 order by id_status desc");
$data = mysqli_fetch_array($sql);
$status = $data['status_udara'];

if($status == "") $status = "Tidak Pengap";
//cetak status
echo $status;

// if(floatval($co2)>1000 || floatval($suhu)>27.1 || floatval($kelembaban)>60) {
//   //cukup pengap
//   ob_start();
//   $status="Cukup Pengap";
//   echo $status;
// }
// if((floatval($co2)>1000 && floatval($suhu)>27.1) || (floatval($co2)>1000 && floatval($kelembaban)>60) || (floatval($suhu)>27.1 && floatval($kelembaban)>60)){
//   //pengap
//   ob_end_clean();
//   $status="Pengap";
//   echo $status;
// }
// if(floatval($co2)>1000 && floatval($suhu)>27.1 && floatval($kelembaban)>60){
//   //sangat pengap
//   ob_end_clean();
//   ob_start();
//   $status="Sangat Pengap";
//   echo $status;
// }
// if(floatval($co2)<1000 && floatval($suhu)<27.1 && floatval($kelembaban)<60){
//     $status="Tidak Pengap";
//     echo $status;
// }
?>