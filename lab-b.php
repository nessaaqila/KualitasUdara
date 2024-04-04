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

            
            <!-- ================ Order Details List ================= -->
            
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Riwayat Data</h2>
                        
                    </div>
                    
                    <div id="content-container">
    <?php
        // Load the content for the first page using PHP
        include 'load_content2.php';
        ?>
</div>
                    

                    
                    
                    
                   </div>
                
                  
            
                        
                    </div>
                    
                    <div id="pagination" class="pagination">
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?php echo $halamanAktif - 1; ?>">
            &laquo;
        </a>
    <?php endif; ?>
    <?php for ($i = $start_number; $i <= $end_number; $i++) : ?>
        <?php if ($halamanAktif == $i) : ?>
            <a href="?halaman=<?php echo $i; ?>" style="color:white;background-color:var(--blue);"> <?php echo $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?php echo $i; ?>"> <?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($halamanAktif < $jumlahPagination) : ?>
        <a href="?halaman=<?php echo $halamanAktif + 1; ?>" >
            &raquo;
        </a>
    <?php endif; ?>
</div>



                        
                        







    </script>
                        
                           
                        
                            
                            
                        
                    <!-- =========== Scripts =========  -->
                    <script src="pagination2.js"></script>
    <script src="assets/js/main.js"></script>
    <!--<script src="assets/js/pagination.js"></script>-->
    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>