<?php
<<<<<<< HEAD

=======
>>>>>>> 5e5f3af291a41edac5341ad6eb360438ad70c1c2
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
            $_SESSION['level'] = $hasil['level'];

            if ($hasil['role'] == 'admin') {
                header("location: index.php");
                exit;
            }
        } else {
            echo "password salah";
        }
    }
}


<<<<<<< HEAD
function register($post)
{
    global $db;
    $username       = $post['username'];
    $password       = $post['password'];
    $level          = $post['level'];  

    $query = "INSERT INTO user VALUES(null, '$username', '$password',
                                '$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
=======
    

?>
>>>>>>> 5e5f3af291a41edac5341ad6eb360438ad70c1c2
