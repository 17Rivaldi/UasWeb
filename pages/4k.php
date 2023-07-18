<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4k & 5K Monitor</title>
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

<body>
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
        <path fill="#313236 fill-opacity=" 1" d="M0,96L48,112C96,128,192,160,288,154.7C384,149,480,107,576,101.3C672,96,768,128,864,160C960,192,1056,224,1152,224C1248,224,1344,192,1392,176L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>

    <!-- List Produk -->
    <div class="container text-center" id="produk">
        <h2>Monitor 4k & 5k</h2>
        <div class="row align-items-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/Philips 288E2UAE.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Philips 288E2UAE 28" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840 x 2160) 28"</li>
                        <li class="list-group-item">Kecepatan Refresh 60Hz</li>
                        <li class="list-group-item">Respon time 4ms</li>
                        <li class="list-group-item">Rp 3.789.899</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/LENOVO E28U-20.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">LENOVO E28U-20 28" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840 x 2160) 28"</li>
                        <li class="list-group-item">Kecepatan Refresh 60Hz</li>
                        <li class="list-group-item">Respon time 4ms</li>
                        <li class="list-group-item">Rp 3.899.899</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/Samsung S27A800U.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Samsung S27A800U 27" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840x2160) 27"</li>
                        <li class="list-group-item">Kecepatan Refresh 60Hz</li>
                        <li class="list-group-item">Respon time 5ms</li>
                        <li class="list-group-item">Rp 5.389.900</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/Dell S2721QS.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Dell S2721QS 27" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840x2160) 27"</li>
                        <li class="list-group-item">Kecepatan Refresh 60Hz</li>
                        <li class="list-group-item">Respon Time 4ms</li>
                        <li class="list-group-item">Rp 5.689.900</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/Gigabyte M28U.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Gigabyte M28U 28" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840x2160) 28"</li>
                        <li class="list-group-item">Kecepatan Refresh 144Hz</li>
                        <li class="list-group-item">Respon time 1ms</li>
                        <li class="list-group-item">Rp 9.499.900</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/Samsung ODYSSEY G7.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Samsung ODYSSEY G7 32" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840 x 2160) 32"</li>
                        <li class="list-group-item">Kecepatan Refresh 144Hz</li>
                        <li class="list-group-item">Respon time 1ms</li>
                        <li class="list-group-item">Rp 10.549.000</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/Asus ProArt.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Asus ProArt 27" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840 x 2160) 27"</li>
                        <li class="list-group-item">Kecepatan Refresh 60Hz</li>
                        <li class="list-group-item">Respon time 5ms</li>
                        <li class="list-group-item">Rp 12.489.900</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/4k/Lenovo Qreator.jpg" class="card-img-top" alt="Produk 1">
                    <div class="card-body">
                        <h5 class="card-title">Lenovo Qreator 27" 4K</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Layar (3840 x 2160) 27"</li>
                        <li class="list-group-item">Kecepatan Refresh 60Hz</li>
                        <li class="list-group-item">Respon time 4ms</li>
                        <li class="list-group-item">Rp 7.999.000</li>
                    </ul>
                    <div class="card-body d-flex justify-content-center">
                        <button type="button" class="btn btn-primary">Tambah Ke Keranjang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End List Produk -->

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

    <!-- My JS -->
    <script src="js/script.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- Feather Icon  -->
    <script>
        feather.replace()
    </script>
</body>

</html>