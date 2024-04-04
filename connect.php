<html>
<body>

<?php

$dbname = 'kual2865_espdata';
$dbuser = 'kual2865_espboard';  
$dbpass = 'Desember26.'; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";
$sensor = $_GET["sensor"];
$location = $_GET["location"];
$temperature = $_GET["temperature"];
$humidity = $_GET["humidity"];
$co2 = $_GET["co2"];


$query = "INSERT INTO SensorData (sensor, location, temperature, humidity, co2) VALUES ('$sensor', '$location', $temperature', '$humidity', 'co2')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>