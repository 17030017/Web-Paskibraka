<?php

session_start();

// jika sudah login, alihkan ke halaman list
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Panitia</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<!---->
<body class="align" background="img/bkgrnd.jpg" >

  <div class="grid">

    <form action="proses-login.php" method="post" class="form login">

      <header class="login__header">
        <h3 class="login__title">Sistem Pendukung Keputusan Seleksi Paskibraka</h3>
      </header>

      <div class="login__body">

        <div class="form__field">
          <input type="email" placeholder="Email" name="username" id="username" required>
        </div>

        <div class="form__field">
          <input type="password" placeholder="Password" name="password" id="password" required>
        </div>

      </div>

      <footer class="login__footer">
        <input type="submit" name="login" id="login" value="Login">

        <p><span class="icon icon--info"></span><a href="#"></a></p>
      </footer>

    </form>

  </div>

</body>
</html>
