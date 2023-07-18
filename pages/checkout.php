<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Dropdown-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootsratp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background-color: grey;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TG.<span>MONITOR</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#jenis">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php#contact">Kontak</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <!--<a href="#"><i data-feather="shopping-cart"></i></a>-->

                    <!-- Dropdown -->
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary position-relative" data-toggle="dropdown">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                                <span class="visually-hidden">items in cart</span>
                            </span>
                        </button>
                        <div class="dropdown-menu">
                            <div class="row total-header-section">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">3</span>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                    <p>Total: <span class="text-info">Rp11.368.900</span></p>
                                </div>
                            </div>
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="../img/4k/Samsung S27A800U.jpg">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>Samsung S27A800U 27" 4K</p>
                                    <span class="price text-info"> Rp5.389.900</span> <span class="count">
                                        Quantity:01</span>
                                </div>
                            </div>
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="../img/gaming/ACER Nitro VG240Y.jpg">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>ACER Nitro VG240Y 23.8"</p>
                                    <span class="price text-info"> Rp1.989.000</span> <span class="count">
                                        Quantity:01</span>
                                </div>
                            </div>
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="../img/gaming/BenQ MOBIUZ EX2710S.jpg">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>BenQ MOBIUZ EX2710S 27"</p>
                                    <span class="price text-info"> Rp3.990.000</span> <span class="count">
                                        Quantity:01</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <button type="button" class="btn btn-primary btn-block" onclick="window.location.href='cart.php'">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary ms-2" type="button" id="btn-login" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='login.php'">Login</button>
                    <button class="btn btn-outline-primary ms-2" type="button" id="btn-daftar" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='daftar.php'">Daftar</button>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success btn-custom" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#313236" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,106.7C384,107,480,181,576,176C672,171,768,85,864,90.7C960,96,1056,192,1152,218.7C1248,245,1344,203,1392,181.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

    <!-- FORM CHECKOUT NYA-->
    <!--<form action="/basic.php" method="POST" class="pembayaran">
        <div class="billing-details">
            <h3 class="uppercase" style="color: orangered; text-align: center;">Pembayaran</h3>
            <div class="space30"></div>
            <form>
                <label class="">Country </label>
                <select class="form-control" name="country">
                    <option value="">Select Country</option>
                    <option value="AFGANISTAN">Afghanistan</option>
                    <option value="ALBANIA">Albania</option>
                    <option value="BELGIUM">Belgium</option>
                    <option value="BRAZIL">Brazil</option>
                    <option value="BOSNIA">Bosnia</option>
                    <option value="CANADA">Canada</option>
                    <option value="AUSTRALIA">Australia</option>
                    <option value="INDONESIA">Indonesia</option>

                </select>
                <div class="clearfix space20"></div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nama Pertama </label>
                        <input class="form-control" placeholder="" value="" type="text" name="namap">
                    </div>
                    <div class="col-md-6">
                        <label>Nama Terakhir </label>
                        <input class="form-control" placeholder="" value="" type="text" name="namat">
                    </div>
                </div>
                <div class="clearfix space20"></div>
                <div class="clearfix space20"></div>
                <label>Alamat </label>
                <input class="form-control" placeholder="Street address" value="" type="text" name="almt">
                <div class="clearfix space20"></div>

                <div class="clearfix space20"></div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Kota </label>
                        <input class="form-control" placeholder="Town / City" value="" type="text" name="kota">
                    </div>
                    <div class="col-md-4">
                        <label>Provinsi</label>
                        <input class="form-control" value="" placeholder="Provinsi" type="text" name="prov">
                    </div>
                    <div class="col-md-4">
                        <label>Kode Pos </label>
                        <input class="form-control" placeholder="Kode Pos" value="" type="text" name="kodPos">
                    </div>
                </div>
                <div class="clearfix space20"></div>
                <label>Alamat Email </label>
                <input class="form-control" placeholder="" value="" type="text" name="email">
                <div class="clearfix space20"></div>
                <label>Nomor Telepon </label>
                <input class="form-control" id="billing_phone" placeholder="" value="" type="text" name="no_tlp">
        </div>

         UNTUK SUB TOTAL PEMBAYARAN
        <h4 class="heading" style="color: orangered; text-align: center;">Pesanan Anda</h4>
        <table class="table table-bordered extra-padding bg-white text-dark">
            <tbody>
                <tr>
                    <th>Total Keranjang</th>
                    <td><span class="amount">Rp 11.368.900</span></td>
                </tr>
                <tr>
                    <th>Ongkir</th>
                    <td>
                        Bebas biaya kirim
                    </td>
                </tr>
                <tr>
                    <th>Order Total</th>
                    <td><strong><span class="amount">Rp 11.368.900</span></strong> </td>
                </tr>
            </tbody>
        </table>

        <div class="row">
            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-dark">Pay Now</button>
            </div>
        </div>
    </form>-->
    <form action="basic.php" method="POST" class="pembayaran">
        <div class="billing-details">
            <h3 class="uppercase" style="color: orangered; text-align: center;">Pembayaran</h3>
            <div class="space30"></div>
            <form>
                <label class="">Country </label>
                <select class="form-control" name="country">
                    <option value="">Select Country</option>
                    <option value="AFGANISTAN">Afghanistan</option>
                    <option value="ALBANIA">Albania</option>
                    <option value="BELGIUM">Belgium</option>
                    <option value="BRAZIL">Brazil</option>
                    <option value="BOSNIA">Bosnia</option>
                    <option value="CANADA">Canada</option>
                    <option value="AUSTRALIA">Australia</option>
                    <option value="INDONESIA">Indonesia</option>
                    
                </select>
                <div class="clearfix space20"></div>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nama Pertama </label>
                        <input class="form-control" placeholder="" value="" type="text" name="namap">
                    </div>
                    <div class="col-md-6">
                        <label>Nama Terakhir </label>
                        <input class="form-control" placeholder="" value="" type="text" name="namat">
                    </div>
                </div>
                <div class="clearfix space20"></div>
                <div class="clearfix space20"></div>
                <label>Alamat </label>
                <input class="form-control" placeholder="Street address" value="" type="text" name="almt">
                <div class="clearfix space20"></div>
                
                <div class="clearfix space20"></div>
                <div class="row">
                    <div class="col-md-4">
                        <label>Kota </label>
                        <input class="form-control" placeholder="Town / City" value="" type="text" name="kota">
                    </div>
                    <div class="col-md-4">
                        <label>Provinsi</label>
                        <input class="form-control" value="" placeholder="Provinsi" type="text" name="prov">
                    </div>
                    <div class="col-md-4">
                        <label>Kode Pos </label>
                        <input class="form-control" placeholder="Kode Pos" value="" type="text" name="kodPos">
                    </div>
                </div>
                <div class="clearfix space20"></div>
                <label>Alamat Email </label>
                <input class="form-control" placeholder="" value="" type="text" name="email">
                <div class="clearfix space20"></div>
                <label>Nomor Telepon </label>
                <input class="form-control" id="billing_phone" placeholder="" value="" type="text" name="no_tlp">
        </div>

        <!-- UNTUK SUB TOTAL PEMBAYARAN-->
        <br>
			<h4 class="heading" style="color: orangered; text-align: center;">Pesanan Anda</h4>
			
			<table class="table table-bordered extra-padding bg-white text-dark">
				<tbody>
					<tr>
						<th>Total Keranjang</th>
						<td><span class="amount">Rp.27.000.000</span></td>
					</tr>
					<tr>
						<th>Ongkir</th>
						<td>
							Bebas biaya kirim				
						</td>
					</tr>
					<tr>
						<th>Order Total</th>
						<td><strong><span class="amount">Rp.27.000.000</span></strong> </td>
					</tr>
				</tbody>
			</table>

            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn">Pay Now</button>
                </div>
            </div>
    </form>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#313236" fill-opacity="1" d="M0,256L48,234.7C96,213,192,171,288,176C384,181,480,235,576,224C672,213,768,139,864,133.3C960,128,1056,192,1152,218.7C1248,245,1344,235,1392,229.3L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>

    <footer>
        <div class="sosial">
            <a href="#"><i data-feather="instagram"></i></a>
            <a href="#"><i data-feather="twitter"></i></a>
            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="../index.php#home">Home</a>
            <a href="../index.php#about">Tentang Kami</a>
            <a href="../index.php#jenis">Menu</a>
            <a href="../index.php#contact">Kontak</a>
        </div>

        <div class="credit">
            <p>Create by <a href="">TG.MONITOR</a>. | &copy; 2023.</p>
        </div>
    </footer>

    <!-- Feather Icon  -->
    <script>
        feather.replace()
    </script>

</body>

</html>