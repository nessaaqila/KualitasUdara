<!DOCTYPE html>
<html><body>
<style>
body {
  background-image: url('images/background.png');
  background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
td{
    color: #fff;
    font-size: 22px;
}
</style>
<?php
$servername = "localhost";

// REPLACE with your Database name
$dbname = "kual2865_userdb";
// REPLACE with Database user
$username = "kual2865_admin";
// REPLACE with Database user password
$password = "Desember26.";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Temperature.id_suhu, Temperature.id_ruangan, Temperature.suhu, Humidity.kelembaban, CarbonDioxide.co2, Temperature.waktu FROM Temperature join Humidity on Temperature.id_suhu=Humidity.id_kelembaban join CarbonDioxide on CarbonDioxide.id_co2 = Humidity.id_kelembaban where Temperature.id_ruangan=1 and Humidity.id_ruangan=1 and CarbonDioxide.id_ruangan=1 ORDER BY Temperature.id_suhu DESC";

echo '<table cellspacing="5" cellpadding="5">
      <tr>
        <td>ID</td> 
        <td>ID Ruangan</td> 
        <td>Suhu</td> 
        <td>Kelembaban</td> 
        <td>CO2</td>
        <td>Waktu</td>
      </tr>';
 
if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_id = $row["id_suhu"];
        $row_location = $row["id_ruangan"];
        $row_temperature = $row["suhu"];
        $row_humidity = $row["kelembaban"]; 
        $row_co2 = $row["co2"]; 
        $row_reading_time = $row["waktu"];
        // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
      
        // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
        //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 4 hours"));
      echo '<tr> 
                <td>' . $row_id . '</td>
                <td>' . $row_location . '</td> 
                <td>' . $row_temperature . '</td> 
                <td>' . $row_humidity . '</td>
                <td>' . $row_co2 . '</td> 
                <td>' . $row_reading_time . '</td> 
              </tr>';
        
    }
    
    $result->free();
}

$conn->close();
?> 
</table>
</body>
</html>