<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kasir dasar</title>
    <link rel="stylesheet" href="login.css">
</head>
<body style="display:flex; align-items:center; justify-content:center;">
<div class="login-page">
  <div class="form">
    <form class="login-form" action="m_login.php" method="post">
      <h2><i class="fas fa-lock"></i> Login</h2>
      <input type="text" name="username_login" placeholder="Username" required />
      <input type="password" name="password_login" placeholder="Password" required/>
      <button type="submit">login</button>
      <p class="message">copyright <a href="#">harisun</a></p>
    </form>
  </div>
</div>
</body>
</html>