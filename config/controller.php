<?php
 
function select($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function loginn($post) {
    global $db;
    $username = $post['username'];
    $password = $post['password'];

    $result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

    

    if (mysqli_num_rows($result) == 1) {
        $hasil = mysqli_fetch_assoc($result);
        $pw = $hasil['password'];

        if (password_verify($password, $pw)) {
            $_SESSION['login'] = true;
            $_SESSION['Level'] = $hasil['Level'];

            if ($hasil['Level'] == 'admin') {
                header("location: index.php");
                
            }else{
               
                    header("location: index_anggota.php");
                
            }
            exit; 
            
        } else {
            echo "password salah";
        }
    }
}
function create_kamar($post)
{
    global $db;
    $jenis       = $post['jenis_kamar'];
    $kelas    = $post['kelas_kamar'];
    $fasilitas    = $post['fasilitas_kamar'];
    $harga      =$post['harga_kamar'];
    $foto       = upload_file();

    // check upload foto
    if (!$foto) {
        return false;
    }

    // query tambah data
    $query = "INSERT INTO kamar VALUES( '$jenis', '$kelas',
                                '$fasilitas','$harga','$foto')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



 
function register($post)
{
    global $db;
    $nama       = $post['nama'];
    $username   = $post['username'];  
    $level       = $post['level'];  
    $password     = password_hash($post['password'],PASSWORD_BCRYPT);  

    // query tambah data
    $query = "INSERT INTO user VALUES(null, '$nama', '$username',
                                '$password','$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function upload_file()
{
    $namaFile   = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error      = $_FILES['gambar']['error'];
    $tmpName    = $_FILES['gambar']['tmp_name'];

    // check file yang diupload
    $extensifileValid = ['jpg', 'jpeg', 'png'];
    $extensifile      = explode('.', $namaFile); //123.jpg
    $extensifile      = strtolower(end($extensifile));

    // check format/extensi file
    if (!in_array($extensifile, $extensifileValid)) {
        // pesan gagal
        echo "<script>
                alert('Format File Tidak Valid');
                
              </script>";
        die();
    }

    // check ukuran file 1 MB
    if ($ukuranFile > 2048000) {
        // pesan gagal
        echo "<script>
                alert('Ukuran File Max 1 MB');
                document.location.href = 'tambah_kamar.php';
              </script>";
        die();
    }


    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $extensifile;

    //namafile baru = 561283901.jpg

    // pindahkan ke folder local
    move_uploaded_file($tmpName, "__DIR__ . '/../img/" . $namaFileBaru);
    return $namaFileBaru;
}

    

?>
