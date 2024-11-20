<?php
session_start();
include 'layout/header.php';

if (isset($_SESSION["up"])) {
    echo "<script>
            alert('regisiter berhasil');
            document.location.href = 'index.php';
          </script>";
    exit;
}

if (isset($_POST['up'])) {
    register($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        .container {
            background-color: #fff;
            border: 2px solid #ddd;
            border-radius: 8px;
            display: flex;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            padding: 20px;
            width: 50%;
        }
        .form-section h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        .form-group a {
            font-size: 14px;
            color: #007BFF;
            text-decoration: none;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
        .login-btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-btn:hover {
            background-color: #0056b3;
        }
        .register-link {
            font-size: 14px;
            margin-top: 10px;
        }
        .register-link a {
            color: #007BFF;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
        .image-section {
            width: 50%;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            border-left: 2px solid #ddd;
        }
        .image-section img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="container">
            <div class="form-section">
                <h1>Register!!</h1>
                <div class="form-group">
                <label for="username">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Anda">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" placeholder="Masukkan Username">
                </div>
                <select name="level" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="anggota">Anggota</option>
                </select>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan Password">
                </div>
              
                <button type="submit" class="daftar-btn" name="up">Daftar Sekarang</button>
               
            </div>
            <div class="image-section">
                <img src="img/Login/owalah iya paham.jpg" alt="Owal Emoji">
            </div>
        </div>
    </form>
</body>
</html>