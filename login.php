<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <title>Đăng nhập</title>
  <link rel="stylesheet" href="assets/css/form.css" />
</head>
<body>
  
  <?php
$map = [
  'invalid' => 'Thông tin không hợp lệ.',
  'exists'  => 'Email đã tồn tại.',
  'empty'   => 'Vui lòng nhập Email và Mật khẩu.',
  'fail'    => 'Email hoặc mật khẩu chưa đúng.',
  'welcome' => 'Đăng ký thành công!',
  'loginok' => 'Đăng nhập thành công!'
];
if (!empty($_GET['msg']) && isset($map[$_GET['msg']])) {
    echo '<p style="color:red;text-align:center;">'.$map[$_GET['msg']].'</p>';
}
?>

  <div class="form-container">
    <h2>Đăng nhập</h2>
    <form id="loginForm" method="POST" action="php/auth/login.php">
      <input type="email" name="email" placeholder="Email" required />
      <input type="password" name="password" placeholder="Mật khẩu" required />
      <button type="submit">Đăng nhập</button>
      <div class="form-link">
        Chưa có tài khoản? <a href="register.php">Đăng ký ngay</a>
      </div>
    </form>
  </div>
</body>
</html>
