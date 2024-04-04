<?php

$mysqli = new mysqli('localhost', 'kual2865_admin', 'Desember26.', 'kual2865_userdb');
if($mysqli->connect_errno != 0){
    echo mysqli->connect_errno;
    exit();
}

$ambildata=$mysqli->query("SELECT Temperature.id_suhu, Temperature.id_ruangan, Temperature.suhu, Humidity.kelembaban, CarbonDioxide.co2, AirStatus.status_udara, Temperature.waktu FROM Temperature join Humidity on Temperature.id_suhu=Humidity.id_kelembaban join CarbonDioxide on CarbonDioxide.id_co2 = Humidity.id_kelembaban join AirStatus on AirStatus.id_status = CarbonDioxide.id_co2 where Temperature.id_ruangan=3 and Humidity.id_ruangan=3 and CarbonDioxide.id_ruangan=3 and AirStatus.id_ruangan=3 ORDER BY Temperature.id_suhu DESC");

$jumlahData=10;
$totalData = mysqli_num_rows($ambildata);
$jumlahPagination = ceil($totalData/$jumlahData);
if(isset($_GET['halaman'])){
    $halamanAktif = $_GET['halaman'];
}
else {
    $halamanAktif = 1;
}

$dataAwal = ($halamanAktif * $jumlahData) - $jumlahData;

$jumlahLink = 5;
if($halamanAktif>$jumlahLink){
    $start_number = $halamanAktif - $jumlahLink;
}
else{
    $start_number = 1;
}

if($halamanAktif < ($jumlahPagination - $jumlahLink)){
    $end_number = $halamanAktif + $jumlahLink;
}
else{
    $end_number = $jumlahPagination;
}
$result = $mysqli->query("SELECT Temperature.id_suhu, Temperature.id_ruangan, Temperature.suhu, Humidity.kelembaban, CarbonDioxide.co2, AirStatus.status_udara, Temperature.waktu FROM Temperature join Humidity on Temperature.id_suhu=Humidity.id_kelembaban join CarbonDioxide on CarbonDioxide.id_co2 = Humidity.id_kelembaban join AirStatus on AirStatus.id_status = CarbonDioxide.id_co2 where Temperature.id_ruangan=3 and Humidity.id_ruangan=3 and CarbonDioxide.id_ruangan=3 and AirStatus.id_ruangan=3 ORDER BY Temperature.id_suhu DESC LIMIT $dataAwal,$jumlahData");

?>