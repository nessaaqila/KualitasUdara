<?php
session_start();
@include 'config.php';





if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}

@include 'pagination.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- ======= Styles ====== -->
    
    <link rel="stylesheet" href="assets/css/style.css">
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

                }, 3000);
            });
        </script>
</head>

<body>
    
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <!--<span class="icon">-->
                        <!--    <ion-icon name="logo-apple"></ion-icon>-->
                        <!--</span>-->
                        <span class="title">Kualitas Udara</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="lab-a.php">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Riwayat Lab Siskom A</span>
                    </a>
                </li>

                <li>
                    <a href="lab-b.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Riwayat Lab Siskom B</span>
                    </a>
                </li>

                <li>
                    <a href="lab-workshop.php">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Riwayat Lab Workshop</span>
                    </a>
                </li>

                

                <li>
                    <a href="logout.php">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                
                <div class="hi">
                    <h3>Hi, <span><?php echo $_SESSION['user_name']?></span>!</h3>
                
                <div class="user">
                    
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
                </div>
            </div>

            <!-- ======================= Cards ================== -->
            <div class="lab"><h2>Lab Siskom A</h2></div>
            <div class="cardBox">
                
                <div class="card">
                    <div>
                        <div class="numbers"><span id ="ceksuhu">0.00</span> ⁰C</div>
                        <div class="cardName">Suhu</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id ="cekkelembaban">0.00</span> %</div>
                        <div class="cardName">Kelembaban</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id ="cekco2">0.00</span> ppm</div>
                        <div class="cardName">Kadar CO2</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id = "cekstatus">Tidak Pengap</span></div>
                        <div class="cardName">Status</div>
                    </div>

                    
                </div>
            </div>

            <!-- ================ Order Details List ================= -->
            
            

<div class="lab"><h2>Lab Siskom B</h2></div>
            <div class="cardBox">
                
                <div class="card">
                    <div>
                        <div class="numbers"><span id ="ceksuhu2">0.00</span> ⁰C</div>
                        <div class="cardName">Suhu</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id ="cekkelembaban2">0.00</span> %</div>
                        <div class="cardName">Kelembaban</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id ="cekco22">0.00</span> ppm</div>
                        <div class="cardName">Kadar CO2</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id = "cekstatus2">Tidak Pengap</span></div>
                        <div class="cardName">Status</div>
                    </div>

                    
                </div>
            </div>

 <div class="lab"><h2>Lab Workshop</h2></div>
            <div class="cardBox">
                
                <div class="card">
                    <div>
                        <div class="numbers"><span id ="ceksuhu3">0.00</span> ⁰C</div>
                        <div class="cardName">Suhu</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id ="cekkelembaban3">0.00</span> %</div>
                        <div class="cardName">Kelembaban</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id ="cekco23">0.00</span> ppm</div>
                        <div class="cardName">Kadar CO2</div>
                    </div>

                    
                </div>

                <div class="card">
                    <div>
                        <div class="numbers"><span id = "cekstatus3">Tidak Pengap</span></div>
                        <div class="cardName">Status</div>
                    </div>

                    
                </div>
            </div>

                        
                                            <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <!--<script src="assets/js/pagination.js"></script>-->
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>