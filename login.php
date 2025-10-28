


<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login | A1 Informatics Engineering</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a2e0e6d9b2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/style/style-admin-page.css">
</head>
<body>
  <div class="login-container">
    <h1>Aone.engineering</h1>
    <p>Masuk untuk melanjutkan ke halaman admin</p>

    <form  method="POST">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="user" id="username" placeholder="Masukkan username..." required>
      </div>

      <div class="input-group">
        <label for="password">Kata Sandi</label>
        <input name="pass" type="password" id="password" placeholder="Masukkan kata sandi..." required>
      </div>

      <button type="submit" name="submit" class="btn-login">Login</button>
    </form>

    <div class="social-login">
      <a href="#"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-tiktok"></i></a>
    </div>
  </div>
</body>
</html>

