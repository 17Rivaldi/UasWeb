<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
       
 <!-- nav -->
 <nav class="navbar navbar-expand-lg navbar-light" style="background: radial-gradient(circle,  #4d5474 0%,  #da3a5a 100%);">
    <div class="container-fluid">
        <!--<a class="navbar-brand" href="./admin.php">
            <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection">
        </a>-->
        <div class="navbar-collapse justify-content-center">
            <h4 class="navbar-text" style="color: white; font-family: 'Arial', sans-serif;">SELAMAT DATANG ADMIN</h4>
        </div>
        <div class="user-cart">
            <?php           
            if(isset($_SESSION['user_id'])){
                ?>
                <a href="" style="text-decoration:none;">
                    <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
                </a>
                <?php
            } else {
                ?>
                <a href="../../index.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
                </a>
                <?php
            } ?>
        </div>
    </div>
</nav>


