<?php
include 'layout/header.php'; 
$data_kamar =select("select*from kamar");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kamar Superior</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f5f5f5;
    }

    h1 {
      text-align: center;
      padding: 20px;
      margin: 0;
      background-color: #fff;
      color: #444;
    }

    .container {
      display: grid;
      grid-template-columns: auto auto;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 10px;
      gap: 250px;
    }

    .card {
      width: 300px;
      background-color: #e0f7fa;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 15px;
    }

    .card-content h3 {
      margin: 0;
      color: #444;
    }

    .card-content ul {
      list-style: none;
      padding: 0;
      margin: 10px 0;
    }

    .card-content ul li {
      margin: 5px 0;
      color: #666;
    }

    .price {
      font-weight: bold;
      color: #000;
      margin-top: 10px;
    }

    .button {
      text-align: center;
      margin-top: 15px;
    }

    .button a {
      display: inline-block;
      text-decoration: none;
      padding: 10px 20px;
      background-color: #00bcd4;
      color: #fff;
      border-radius: 5px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    .button a:hover {
      background-color: #008c9e;
    }

    body{
        margin-top: 100px;
    }
  </style>
</head>
<body>
  <h1 class="kamar">Kamar Deluxe</h1>

  <?php foreach ($data_kamar as $kamar) : ?>
  <div class="container">
    <div class="card">
    <img src="img/<?= $kamar["gambar"];?>" alt="<?= $kamar["gambar"];?>" height="100px">
      <div class="card-content">
      <?= $kamar["Kelas_kamar"];?>
      <br>
      
      <?= $kamar["jenis_kamar"];?>
      <br>
      <h3>Fasilitas Yang didapatkan:</h3>
      <?= $kamar["fasilitas_kamar"];?>
      <h3>Harga Termasuk Pajak</h3>
      <?= $kamar["harga_kamar"];?>
        <div class="button">
          <a href="#">Booking</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
</body>
</html>
