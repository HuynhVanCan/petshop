<!doctype html>
<html lang="en">
<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/styles.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/loginbg.jpg);">
<div class="home">
    <a href="index.php">Home</a>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Register</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h3 class="mb-4 text-center">Create an account</h3>
                    <form action="register.php" method="post" class="signin-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" name="username" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email" required>
                        </div>
                        <div class="form-group">
                            <input id="password-field" type="password" class="form-control" placeholder="Password" name="password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control btn btn-primary submit px-3" name="submit">Register</button>
                        </div>
                    </form>
                    <div class="form-group d-md-flex">
                        <div class="w-100 text-center">
                            <a href="login.php" style="color: #fff">Already have an account? Login here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>

<?php
// Kiểm tra xem người dùng đã nhấn nút đăng ký chưa
if(isset($_POST["submit"])) {
    // Lấy giá trị từ form
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Ở đây bạn có thể thêm mã xác thực người dùng, ví dụ: kiểm tra xem tên người dùng đã tồn tại trong cơ sở dữ liệu chưa

    // Sau khi xác thực, bạn có thể thực hiện các hành động như lưu thông tin người dùng vào cơ sở dữ liệu và chuyển hướng người dùng đến trang đăng nhập
}
?>
