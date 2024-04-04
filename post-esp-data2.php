<?php

$servername = "localhost";

// REPLACE with your Database name
$dbname = "kual2865_userdb";
// REPLACE with Database user
$username = "kual2865_admin";
// REPLACE with Database user password
$password = "Desember26.";

// Keep this API Key value to be compatible with the ESP32 code provided in the project page. 
// If you change this value, the ESP32 sketch needs to match
$api_key_value = "tPmAT5Ab3j7F9";

$api_key= $sensor = $location = $temperature = $humidity = $co2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $api_key = test_input($_POST["api_key"]);
    if($api_key == $api_key_value) {
        $id_ruangan = test_input($_POST["id_ruangan"]);
        $suhu = test_input($_POST["temperature"]);
        $kelembaban = test_input($_POST["kelembaban"]);
        $co2 = test_input($_POST["co2"]);
        $status = test_input($_POST["status"]);
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql1 = "INSERT INTO Temperature (id_ruangan, suhu)
        VALUES ('" . $id_ruangan . "', '" . $suhu . "')";
        
        $sql2 = "INSERT INTO Humidity (id_ruangan, kelembaban)
        VALUES ('" . $id_ruangan . "', '" . $kelembaban . "')";
        
        $sql3 = "INSERT INTO CarbonDioxide (id_ruangan, co2)
        VALUES ('" . $id_ruangan . "', '" . $co2 . "')";
        
        $sql4 = "INSERT INTO AirStatus (id_ruangan, status_udara)
        VALUES ('" . $id_ruangan . "', '" . $status . "')";
        
        if ($conn->query($sql1) === TRUE) {
            echo "New record created successfully";
        } 
        if ($conn->query($sql2) === TRUE) {
            echo "New record created successfully";
        }
        if ($conn->query($sql3) === TRUE) {
            echo "New record created successfully";
        }
        if ($conn->query($sql4) === TRUE) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    else {
        echo "Wrong API Key provided.";
    }
    
    

}
else {
    echo "No data posted with HTTP POST.";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}