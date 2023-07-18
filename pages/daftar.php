<?php
//session_start(); // Pastikan Anda memanggil session_start() sebelum menggunakan $_SESSION

require 'dbconnect2.php';

/*if (!empty($_SESSION["id"])) {
    header("location: halaman admin/admin.php");
    exit(); // Tambahkan exit() setelah pemanggilan header() agar skrip berhenti dieksekusi
}*/

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];
    $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username atau Email sudah diambil')</script>";
    } else {
        if ($password == $confirmPassword) {
            $query = "INSERT INTO tb_user (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
            mysqli_query($conn, $query);
            echo "<script>alert('Registrasi Berhasil')</script>";
        } else {
            echo "<script>alert('Password Tidak Cocok')</script>";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- Feather Icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootsratp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .header {
            /* background-color: #f60; */
            padding: 10px;
            text-align: center;
            color: #0d6efd;
        }

        .radio-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px;
            background-color: #0d6efd;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        p {
            margin-top: 1rem;
        }

        p a {
            margin-left: 5px;
        }

    </style>
</head>

<body>
    <div class="header">
        <h1>TG MONITOR</h1>
    </div>
    <div class="container">
        <h2>Daftar</h2>
        <form action="#" method="POST">
            <label for="nama">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="nama">Username</label>
            <input type="text" id="nama" name="username" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password">Confirm - Password</label>
            <input type="password" id="password" name="confirm-password" required>

            <div class="radio-container">
                <input type="radio" id="admin" name="role" value="admin" required>
                <label for="admin">Admin</label>
            </div>

            <div class="radio-container">
                <input type="radio" id="user" name="role" value="user" required>
                <label for="user">User</label>
            </div>

            <button type="submit" name="submit">Daftar</button>
            <P>Sudah Punya akun?<a href="login.php" style="text-decoration: none;">Masuk</a></P>
        </form>
    </div>

    <!-- My JS -->
    <script src="js/script.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <!-- Feather Icon  -->
    <script>
        feather.replace()
    </script>
</body>

</html>