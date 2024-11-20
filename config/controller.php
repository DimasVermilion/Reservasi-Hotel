<?php
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
            $_SESSION['level'] = $hasil['level'];

            if ($hasil['role'] == 'admin') {
                header("location: index.php");
            }
        } else {
            echo "password salah";
        }
    }
}

function login($post) { 
global $db;
$username =$post['username'];
$username =$post['password'];

$result = mysqli_query($db, "SELECT * FROM user WHERE username = '$username'");

if (mysqli_num_rows($result) == 1) {
    $hasil = mysqli_fetch_assoc($result);
    $pw = $hasil['password'];
}
    
}
?>