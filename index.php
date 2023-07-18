<!DOCTYPE html>
<html lang="en">

<!-- Ketentuan Project
1. Ada Form Login
2. Ada Register
3. Ada Minimal 2 role user
4. Ada proses pembelian di website

Sisanya se kreatif kita -->


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TG MONITOR</title>
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
    <link rel="stylesheet" href="css/style.css">
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
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#jenis">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
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
                                    <img src="img/4k/Samsung S27A800U.jpg">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>Samsung S27A800U 27" 4K</p>
                                    <span class="price text-info"> Rp5.389.900</span> <span class="count">
                                        Quantity:01</span>
                                </div>
                            </div>
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="img/gaming/ACER Nitro VG240Y.jpg">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>ACER Nitro VG240Y 23.8"</p>
                                    <span class="price text-info"> Rp1.989.000</span> <span class="count">
                                        Quantity:01</span>
                                </div>
                            </div>
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="img/gaming/BenQ MOBIUZ EX2710S.jpg">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>BenQ MOBIUZ EX2710S 27"</p>
                                    <span class="price text-info"> Rp3.990.000</span> <span class="count">
                                        Quantity:01</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                    <button type="button" class="btn btn-primary btn-block" onclick="window.location.href='pages/cart.php'">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="login">
                    </div> -->
                    <button class="btn btn-primary ms-2" type="button" id="btn-login" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='pages/login.php'">Login</button>
                    <button class="btn btn-outline-primary ms-2" type="button" id="btn-daftar" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;" onclick="window.location.href='pages/daftar.php'">Daftar</button>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success btn-custom" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Selection -->
    <section class="hero" id="home">
        <main class="content">
            <h1>Bekerja dan Belajar dengan Produktivitas yang Nyaman</h1>
            <p>Temukan Monitor Terkini dengan Fitur Canggih di Web Kami!</p>
            <!-- <a href="#" class="cta">Beli Sekarang</a> -->
        </main>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#313236" fill-opacity="1" d="M0,256L48,218.7C96,181,192,107,288,106.7C384,107,480,181,576,176C672,171,768,85,864,90.7C960,96,1056,192,1152,218.7C1248,245,1344,203,1392,181.3L1440,160L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
        </path>
    </svg>
    <!-- End Hero Selection -->

    <!-- About Section Start -->
    <section id="about" class="about">
        <h2><span>Tentang</span> Kami</h2>
        <div class="row">
            <div class="about-img">
                <img src="img/8.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>TG MONITOR</h3>
                <p>Merupakan platform yang menghadirkan pengalaman belanja monitor terbaik untuk Anda. Dengan komitmen
                    untuk memberikan kualitas terbaik dan pilihan yang luas, kami menjadi tujuan utama bagi para pecinta
                    teknologi dan para profesional yang mencari solusi tampilan berkualitas.</p>
                <p>Kami menyediakan berbagai jenis monitor dengan fitur terkini dan teknologi mutakhir. Kami memahami
                    pentingnya kualitas visual dalam kegiatan sehari-hari, baik itu untuk keperluan gaming, desain
                    grafis, pekerjaan kreatif, ataupun kebutuhan komputasi sehari-hari.</p>
                <p>Bergabunglah dengan kami di TG Monitor dan temukan pengalaman berbelanja monitor yang luar biasa.
                    Segera jelajahi koleksi produk kami dan jadikan tampilan visual Anda lebih hidup dan memukau dengan
                    monitor berkualitas tinggi.</p>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Produk -->
    <section class="container text-center mt-5" id="jenis">
        <h2>Jenis <span>Monitor</span></h2>
        <div class="row align-items-center">
            <div class="col">
                <img src="img/gaming.jpg" alt="Produk 1" style="border-radius: 1rem;">
            </div>
            <div class="col te" style="text-align: left;">
                <h5>Gaming Monitor</h5>
                <h3>Pengalaman Gaming yang Lebih Mendalam</h3>
                <p>Bersiaplah, mainkan! Monitor gaming LG meningkatkan permainan Anda dengan kualitas gambar yang hidup
                    dari Nano IPS 1ms, kecepatan luar biasa lebih cepat dari 144Hz, dan teknologi terbaru yang berfokus
                    pada game.</p>
                <button type="button" class="btn btn-primary" onclick="window.location.href='pages/gaming.php'">Lihat
                    Gaming
                    Monitor</button>
            </div>
        </div>

        <div class="row align-items-center my-5">
            <div class="col te" style="text-align: left;">
                <h5>UltraWide Monitor</h5>
                <h3>Lihat Lebih Banyak, Bekerja Lebih Mudah, dan Berkreasi Lebih Baik</h3>
                <p>Lihat lebih banyak konten sekaligus dari sebelumnya. Nikmati pemandangan panorama dan nikmati semua
                    yang Anda inginkan dengan layar yang lebar.</p>
                <button type="button" class="btn btn-primary" onclick="window.location.href='pages/ultrawide.php'">Lihat
                    UltraWide Monitor</button>
            </div>
            <div class="col">
                <img src="img/ultrawide.jpg" alt="Produk 1" style="border-radius: 1rem;">
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col">
                <img src="img/4k.jpg" alt="Produk 1" style="border-radius: 1rem;">
            </div>
            <div class="col te" style="text-align: left;">
                <h5>4K & 5K Monitor</h5>
                <h3>Ekpresikan Visual yang Lebih Akurat, Jelas, dan Mendetail</h3>
                <p>Teman yang sempurna dari menonton konten 4K hingga profesional desain dan video. Monitor LG 4K & 5K
                    dikenal dengan gambar yang lebih detail dengan resolusi tinggi, kualitas gambar luar biasa, dan
                    reproduksi warna yang sangat baik.</p>
                <button type="button" class="btn btn-primary" onclick="window.location.href='pages/4K.php'">Lihat 4K &
                    5K
                    Monitor</button>
            </div>
        </div>

        <div class="row align-items-center my-5">
            <div class="col te" style="text-align: left;">
                <h5>FHD & QHD Monitor</h5>
                <h3>Standar untuk Monitor</h3>
                <p>Monitor FHD dan QHD adalah monitor paling dasar dan populer yang kompatibel dengan standar untuk
                    hampir semua situasi.</p>
                <button type="button" class="btn btn-primary" onclick="window.location.href='pages/standart.php'">Lihat
                    FHD &
                    QHD Monitor</button>
            </div>
            <div class="col">
                <img src="img/standart.jpg" alt="Produk 1" style="border-radius: 1rem;">
            </div>
        </div>
    </section>
    <!-- End Produk -->

    <!-- Kontak -->
    <section id="contact" class="contact">
        <h2><span>Kontak</span> Kami</h2>
        <p>Isi data diri dan masukan pesan</p>

        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126748.6096503425!2d107.56075541323354!3d-6.9032719528690425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6398252477f%3A0x146a1f93d3e815b2!2sBandung%2C%20Kota%20Bandung%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1689322564903!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="maps"></iframe>
            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" placeholder="nama">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="text" placeholder="email">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" placeholder="no hp">
                </div>
                <div class="input-group">
                    <i data-feather="message-circle"></i>
                    <textarea rows="4" placeholder="Pesan"></textarea>
                </div>
                <button type="submit" class="btn">Kirim Pesan</button>
            </form>
        </div>
    </section>
    <!-- End Kontak -->

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
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#jenis">Menu</a>
            <a href="#contact">Kontak</a>
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