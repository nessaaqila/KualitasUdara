<?php
session_start();
@include 'config.php';





if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}

//@include 'pagination.php';


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
</head>

<body>
    
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Kualitas Udara</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Customers</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Messages</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="help-outline"></ion-icon>
                        </span>
                        <span class="title">Help</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Settings</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                        </span>
                        <span class="title">Password</span>
                    </a>
                </li>

                <li>
                    <a href="#">
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

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
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
                        <div class="numbers"><span id ="ceksuhu">0.00</span> °C</div>
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
            
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Riwayat Data</h2>
                        
                    </div>
                    
                    <div id="data-container">
    
</div>
                    

                    
                    
                    
                   </div>
                
                  
            
                        
                    </div>
                    
        </div>
        
</div>
<div id="pagination" class="pagin">
    
                        </div>
                    
<script src="pagination.js"></script>

                           
                        
                            
                            
                        
                    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <!--<script src="assets/js/pagination.js"></script>-->
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>