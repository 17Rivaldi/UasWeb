<!-- Sidebar -->
<div class="sidebar" id="mySidebar" style="background: radial-gradient(circle,  #4d5474 0%,  #da3a5a 100%);">
    <div class="side-header">
        <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection">
        <h5 style="margin-top:10px;">Hallo, Admin</h5>
    </div>
    <hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./admin.php" ><i class="fa fa-user" style="font-size: 22px;"></i> Profile</a>
    <a href="#customers"  onclick="showCustomers()" ><i class="fa fa-users" style="font-size: 22px;"></i> Customers</a>
    <a href="#category"   onclick="showCategory()" ><i class="fa fa-th-large" style="font-size: 22px;"></i> Category</a>
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th" style="font-size: 22px;"></i> Products</a>
    <a href="#orders" onclick="showOrders()"><i class="fa fa-list" style="font-size: 22px;"></i> Orders</a>
    <a href="#message" onclick="showMessage()"><i class="fa fa-envelope" style="font-size: 22px;"></i> Message</a>
    <a href="#logout" onclick="logout()"><i class="fa fa-sign-out-alt" style="font-size: 22px;"></i> Logout</a>
</div>

<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home" style="font-size: 22px;"></i></button>
</div>


