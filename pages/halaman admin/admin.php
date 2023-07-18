<!DOCTYPE html>
<html>
<head>
  <title>Admin</title>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="./assets/css/style.css"></link>
  </head>

<style>
  .container3 {
        display: flex;
        justify-content: space-around;
        padding:20px;
        margin:20px;
        border-radius:15px;
        background: rgb(238,174,202);
        background: radial-gradient(circle,  #4d5474 0%,  #da3a5a 100%);
    }

   .box1 {
      text-align: center;
      margin-bottom: 20px;
      margin-right:50px;
      
    }

   .image1 img {
      width: 200px;
      height: 200px;
      border-radius: 40%;
      background-color: #ccc;
      margin-left:15px;
    }

    .caption1 {
       margin-top: 10px;
       font-family: 'Belanosima', sans-serif;
       font-size:20px;
    }
</style>

<body >
    
        <?php
            /*include "./navbar.php";*/
            include "./adminHeader.php";
            include "./sidebar.php";
           
            include_once "./config/dbconnect.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="container3">
            <div class="box1">
                <div class="image1" >
                    <img src="uploads/gambar giri.jpeg">
                </div>
                    <label>Giri Van Transco</label>
                    <p>17213029</p>
                    <?php
                        $sql="SELECT * from users where isAdmin=0";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        /*echo $count;*/
                    ?>    
            </div>
            
            <div class="box1">
                <div class="image1" >
                    <img src="uploads/gambar rivaldi.jpeg">
                </div>
                    <label>Rivaldi Syaputra</label>
                    <p>17212002</p>
                    <?php
                       
                       $sql="SELECT * from category";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                      // echo $count;
                   ?>       
            </div>

            <div class="box1">
                <div class="image1" >
                    <img src="uploads/gambar arizal.jpeg">
                </div>
                    <label>Arizal Sabilla Nurhikam</label>
                    <p>17213042</p>
                    <?php
                       
                       $sql="SELECT * from product";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       //echo $count;
                   ?>           
            </div>

            <div class="box1">
                <div class="image1" >
                    <img src="uploads/gambar mamun.jpeg">
                </div>
                    <label>Ma'mun Hasbullah</label>
                    <p>17213033</p>
                    <?php
                       
                       $sql="SELECT * from orders";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       //echo $count;
                   ?>
                  
            </div>
        </div>
        
    </div>
       
            
        <?php
            if (isset($_GET['category']) && $_GET['category'] == "success") {
                echo '<script> alert("Category Successfully Added")</script>';
            }else if (isset($_GET['category']) && $_GET['category'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['size']) && $_GET['size'] == "success") {
                echo '<script> alert("Size Successfully Added")</script>';
            }else if (isset($_GET['size']) && $_GET['size'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['variation']) && $_GET['variation'] == "success") {
                echo '<script> alert("Variation Successfully Added")</script>';
            }else if (isset($_GET['variation']) && $_GET['variation'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
        ?>


    <script type="text/javascript" src="./assets/js/ajaxWork.js"></script>    
    <script type="text/javascript" src="./assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>