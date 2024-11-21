<?php
include 'layout/header.php';

//ketika button submit di tekan
if (isset($_POST['up'])) {  

  var_dump($_POST);
  var_dump($_FILES);

    if (create_kamar($_POST) > 0) {
      echo "<script>
            alert('Data Barang Berhasil Ditambahkan');
            document.location.href = 'index_anggota.php';
            </script>";     
    } else {
        echo "<script>
                alert('Data Barang Gagal Ditambahkan');
                document.location.href = 'index_anggota.php';
              </script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tambah{
            padding-top: 250px;
        }
    </style>
</head>
<body>
    <div class="tambah">
<h1>TAMBAH KAMAR HOTEL</h1>

<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="sekolah" class="form-label">jenis kamar</label>
    <input type="radio" id="deluxe" name="jenis_kamar" value="deluxe">
  <label for="deluxe">Deluxe</label><br>
  <input type="radio" id="superior" name="jenis_kamar" value="superior">
  <label for="superior">Superior</label><br>
  <input type="radio" id="superdeluxe" name="jenis_kamar" value="Superdeluxe">
  <label for="superdeluxe">SuperDeluxe</label><br><br>
  </div>
  <div class="mb-3"> 
    <label for="kelas" class="form-label">Kelas kamar</label>
    <input type="Text" class="form-control" name="kelas_kamar" placeholder="Masukan kelas kamar" required>
  </div>
 
  <div class="mb-3">
    <label for="jurusan" class="form-label">fasilitas kamar</label>
    <input type="Text" class="form-control" name="fasilitas_kamar" placeholder="Masukan fasilitas kamar" required>
  </div>
  <div class="mb-3">
    <label for="jurusan" class="form-label">Harga Kamar:</label>
    <input type="Text" class="form-control" name="harga_kamar" placeholder="Masukan harga kamar" required>
  </div>

  
  <div class="mb-3">
    <label for="alamat" class="form-label">gambar</label>
    <input type="File" class="form-control" name="gambar" placeholder="Masukan gambar" required>
  </div>
  <button type="submit" class="btn btn-primary" name="up">Submit</button>
</form>
</div>
</body>
</html>

<?php
include 'layout/footer.php';
?>