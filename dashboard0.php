<?php
session_start();
@include 'config.php';



if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}
?>

<html>
    <head>
        <meta name="viewport" content="width=device-with", initial-scale="1.0">
        <title></title>
        <link rel="stylesheet" href="style-dashboard.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <script type="text/javascript" src="jquery/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                setInterval( function() {
                    $("#ceksuhu").load("ceksuhu.php");
                    $("#cekkelembaban").load("cekkelembaban.php");
                    $("#cekco2").load("cekco2.php");
                    $("#cekstatus").load("cekstatus.php");
                    
                    $("#ceksuhu2").load("ceksuhu2.php");
                    $("#cekkelembaban2").load("cekkelembaban2.php");
                    $("#cekco22").load("cekco22.php");
                    $("#cekstatus2").load("cekstatus2.php");
                    
                    $("#ceksuhu3").load("ceksuhu3.php");
                    $("#cekkelembaban3").load("cekkelembaban3.php");
                    $("#cekco23").load("cekco23.php");
                    $("#cekstatus3").load("cekstatus3.php");

                }, 30000);
            });
        </script>

    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <h4>Welcome, <span><?php echo $_SESSION['user_name']?></span>!</h4>
                <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                </nav>
                <img src="images/menu.png" class="menu-icon">

        
            </div>

        
            <div class="row">
                <div class="col">
                    <h1>Lab Siskom A</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="esp-data.php"><button type="button">Lihat Tabel Data</button></a>
                </div>
                <div class="col">
                    <div class="card card1">
                        <h3>Suhu</h3>
                        <h2><span id ="ceksuhu">0.00</span>°</h2>
                    </div>
                    <div class="card card2">
                        <h3>Kelembaban</h3>
                        <h2><span id ="cekkelembaban">0.00</span>%</h2>
                    </div>
                    <div class="card card3">
                        <h3>CO2</h3>
                        <h2><span id ="cekco2">0.00</span> ppm</h2>
                    </div>
                    <div class="card card4">
                        <h3>Status</h3>
                        <h2><span id = "cekstatus">Tidak Pengap</span></h2>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Lab Siskom B</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="esp-data2.php"><button type="button">Lihat Tabel Data</button></a>
                </div>
                <div class="col">
                    <div class="card card1">
                        <h3>Suhu</h3>
                        <h2><span id ="ceksuhu2">0.00</span>°</h2>
                    </div>
                    <div class="card card2">
                        <h3>Kelembaban</h3>
                        <h2><span id ="cekkelembaban2">0.00</span>%</h2>
                    </div>
                    <div class="card card3">
                        <h3>CO2</h3>
                        <h2><span id ="cekco22">0.00</span> ppm</h2>
                    </div>
                    <div class="card card4">
                        <h3>Status</h3>
                        <h2><span id = "cekstatus2">Tidak Pengap</span></h2>
                    </div>
                </div>
            </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Lab Workshop</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <a href="esp-data3.php"><button type="button">Lihat Tabel Data</button></a>
                </div>
                <div class="col">
                    <div class="card card1">
                        <h3>Suhu</h3>
                        <h2><span id ="ceksuhu3">0.00</span>°</h2>
                    </div>
                    <div class="card card2">
                        <h3>Kelembaban</h3>
                        <h2><span id ="cekkelembaban3">0.00</span>%</h2>
                    </div>
                    <div class="card card3">
                        <h3>CO2</h3>
                        <h2><span id ="cekco23">0.00</span> ppm</h2>
                    </div>
                    <div class="card card4">
                        <h3>Status</h3>
                        <h2><span id = "cekstatus3">Tidak Pengap</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>