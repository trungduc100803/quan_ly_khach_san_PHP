<?php
include('../../quan_ly_khach_san/config/connectMySQL.php');


if (isset($_POST['btnLogin'])) {
    $username = $_POST['userName'];
    $password = $_POST['password'];

    $get_users = "SELECT * FROM users";
    $data_users = mysqli_query($conn, $get_users);
    $i = 0;
    while ($user = mysqli_fetch_array($data_users)) {
        if ($username == $user['name'] && $password == $user['password']) {
            header('Location:../../quan_ly_khach_san/index.php');
            echo "<script>alert('ban da dang nhap thanh cong')</script>";
        } else if ($username != $user['name']) {
            // header('Location:../../quan_ly_khach_san/login.php');
            // print_r($user);
        } else {
            // header('Location:../../quan_ly_khach_san/login.php');
            // $i++;
            // print_r($user);
        }
        $i++;
    }
}
