<?php
include 'layout/header.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .login {
            background-color: #007bff;
        }
        .register {
            background-color: #28a745;
        }
        .dashboard {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
            height: 100vh;
            box-sizing: border-box;
            background-color: #f1f1f1;
        }
        .welcome {
            max-width: 50%;
        }
        .welcome h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }   
        .welcome p {
            margin-bottom: 1rem;
            line-height: 1.6;
        }
        .welcome button {
            padding: 0.5rem 1rem;
            margin-right: 0.5rem;
            font-size: 1rem;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .welcome button:first-child {
            background-color: #007bff;
        }
        .welcome button:last-child {
            background-color: #28a745;
        }
        .hotel-image img {
            max-width: 2000px;
            border-radius: 10px;
        }
        .booking-button {
        display: inline-block;
        padding: 12px 24px;
        background-color: #007bff;
        color: #fff; 
        text-decoration: none;
        border-radius: 5px;
        font-weight: bold;
        font-size: 16px;
        transition: background-color 0.3s;
        position: relative;
    }
    .booking-button span {
        margin-left: 8px;
        transition: transform 0.3s;
        font-size: 18px;
    }

    .booking-button:hover {
        background-color: #0056b3;
    }

    .booking-button:hover span {
        transform: translateX(4px);
    }


    /* Kelas Kamar */

    .room-container {
            width: 80%;
            display: flex;
            flex-direction: column;
            gap: 40px;
            padding: 20px;
            margin: auto;
        }
        .room {
            display: flex;
            align-items: center;
            gap: 30px;
        }
        .room:nth-child(odd) {
            flex-direction: row;
        }
        .room:nth-child(even) {
            flex-direction: row-reverse;
        }
        .room-image {
            width: 40%;
            flex-shrink: 0;
        }
        .room-image img {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 2000px;
        }
        .room-info {
            width: 50%;
        }
        .room-title {
            font-size: 1.8em;
            font-weight: bold;
            margin: 0;
            color: #333;
        }
        .room-button {
            font-size: 1em;
            color: #007bff;
            margin-top: 10px;
            text-decoration: none;
        }
        .room-button:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="dashboard">
    <div class="welcome">
        <h1>SELAMAT DATANG DI THE ROYAL PENTHOUSE!</h1>
        <p>Kami sangat bahagia menyambut Anda di tempat yang dirancang untuk menghadirkan kemewahan dan kenyamanan terbaik.</p>
        <p>Nikmati suasana nyaman dan fasilitas lengkap yang kami sediakan hanya untuk Anda.</p>
        <a href="#" class="booking-button">Booking <span>&#10132;</span></a>
    </div>
    <div class="hotel-image">
        <img src="img/dashboard hotel.jpg" alt="Hotel Image">
    </div>
</div>


<div class="room-container">
        <div class="room">
            <div class="room-image">
                <img src="img/kelasH/deluxe.jpg" alt="Kamar Deluxe">
            </div>
            <div class="room-info">
                <div class="room-title">Kamar Deluxe</div>
                <a href="deluxe.php" class="room-button">Booking Sekarang</a>
            </div>
        </div>
        
        <div class="room">
            <div class="room-image">
                <img src="img/kelasH/superior.jpg" alt="Kamar Superior">
            </div>
            <div class="room-info">
                <div class="room-title">Kamar Superior</div>
                <a href="superior.php" class="room-button">Booking Sekarang</a>
            </div>
        </div>
        <div class="room">
         <div class="room-image">
                <img src="img/kelasH/super deluxe.jpg" alt="Kamar Superior">
            </div>
            <div class="room-info">
                <div class="room-title">Kamar Super Deluxe</div>
                <a href="superior.php" class="room-button">Booking Sekarang</a>
            </div>
        </div>
    </div>




</body>
</html>
