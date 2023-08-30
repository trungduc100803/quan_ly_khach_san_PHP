<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách sạn</title>
    <!-- <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/home.css"> -->
    <!-- <link rel="stylesheet" href="../quan_ly_khach_san/css/menu.css"> -->
    <link rel="stylesheet" href="./assets/fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="./css/index.css">
</head>

<body>
    <?php
    include('../quan_ly_khach_san/views/header.php');
    include('./views/menu.php');
    include('../quan_ly_khach_san/config/connectMySQL.php');
    ?>

    <main class="main">
        <?php
        isset($_GET['page']) ? $urlPage = $_GET['page'] : $urlPage = '';

        if ($urlPage == 'room') {
            include('../quan_ly_khach_san/views/phong.php');
            // include('./views/phongCuThe.php');
        } else if ($urlPage == 'order_room') {
            include('../quan_ly_khach_san/views/dangKiPhong.php');
        } else if ($urlPage == 'hoa_don') {
            include('../quan_ly_khach_san/views/hoaDon.php');
        } else {
            include('../quan_ly_khach_san/views/home.php');
        }
        ?>
    </main>

    <?php
    // include('./views/footer.php');

    ?>

    <script src="./index.js"></script>
</body>

</html>