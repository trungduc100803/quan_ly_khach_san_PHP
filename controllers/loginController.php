<?php
include('../../quan_ly_khach_san/config/connectMySQL.php');


if (isset($_POST['btnLogin'])) {
    $username = $_POST['userName'];
    $password = $_POST['password'];

    echo $username, $password;

    $get_users = "SELECT * FROM users WHERE name = '$username' AND password = '$password'";
    $data_users = mysqli_query($conn, $get_users);
    $user = mysqli_num_rows($data_users);

    //kiem tra user co ton tai ko
    if ($user > 0) {
        //lay quyen user
        $userInfo = mysqli_fetch_row($data_users);
        session_start();
        $_SESSION['role'] = $userInfo[4];
        header("Location: ../../quan_ly_khach_san/index.php");
    } else {
        echo "ho tt";
    }
}
