<?php
include 'config/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>    The Royal Penthouse    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f9fa;
            padding: 1rem 2rem;
            border-bottom: 2px solid #e0e0e0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
        }
        .navbar-logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        .navbar-links {
            display: flex;
            gap: 1rem;
        }
        .navbar-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 0.5rem 1rem;
        }
        .navbar-links a:hover {
            color: #0056b3;
        }
        .navbar-actions .button {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            text-decoration: none;
            font-size: 1rem;
            margin-left: 0.5rem;
            transition: background-color 0.3s ease;
        }
        .navbar-actions .login {
            background-color: #007bff;
        }
        .navbar-actions .register {
            background-color: #28a745;
        }
        .navbar-actions .button:hover {
            background-color: #0056b3;
        }
        .navbar-actions .register:hover {
            background-color: #218838;
        }
        .navbar-actions .button::after {
            content: '\2192';
            margin-left: 8px;
            font-size: 1rem;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="navbar-logo">
    The Royal Penthouse
    </div>
    <div class="navbar-links">
            <a href="index.php">Beranda</a>
            
        
        <a href="#">Fasilitas Hotel</a>
        <a href="#">Fasilitas Kamar</a>
    </div>
    <div class="navbar-actions">
        <a href="login.php" class="button login">Log In</a>
        <a href="#" class="button register">Register</a>
    </div>
</nav>

</body>
</html>
