<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>
    <div class="login">
        <form action="../quan_ly_khach_san/controllers/loginController.php" method="post" class="form_login">
            <p>Đăng nhập</p>
            <div class="form_item">
                <label for="">Nhập tên đăng nhập</label>
                <input type="text" name="userName" id="" placeholder="Nhập tên đăng nhập">
            </div>
            <div class="form_item">
                <label for="">Nhập mật khẩu</label>
                <input type="password" name="password" id="" placeholder="Nhập mật khẩu">
            </div>
            <input type="submit" value="Login" class="btnLogin" name="btnLogin">
        </form>
    </div>
</body>

</html>