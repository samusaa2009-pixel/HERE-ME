<?php
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>HERE ME</title>
  <style>
  
    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      padding: 0;
      overflow-x: hidden; 
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body.pagina-inicio {
      background: linear-gradient(to right, #708cc5, #dfe4ec);
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    .container {
      background-color: #020f23;
      border-radius: 15px;
      box-shadow: 0 25px 30px rgba(3, 5, 15, 0.6);
      padding: 40px;
      width: 430px;
      text-align: center;
      margin-top: 120px;
      margin-bottom: 130px;
    }

    h1 {
      color: #7f9dda;
      margin-bottom: 40px;
      font-size: 40px;
    }

    .btn {
      display: block;
      width: 100%;
      margin: 10px 0;
      padding: 12px;
      border: none;
      border-radius: 18px;
      background-color: #708cc5;
      color: #000000;
      font-size: 17px;
      cursor: pointer;
      transition: background 0.4s ease, transform 0.2s ease;
    }

    .btn:hover {
      background-color: #c0d3de;
      transform: scale(1.022);
    }

    .logo {
      position: fixed;
      top: 0;
      left: 15px;
      width: 90px;
      height: auto;
      cursor: pointer;
      z-index: 101;
      max-width: 100vw; 
    }

    .login {
      position: fixed;
      top: -12px;
      right: 10px; 
      padding: 5px;
      width: 75px;
      height: 80px;
      z-index: 9999;
      max-width: 100vw;
    }

    a {
      text-decoration: none;
    }

    footer {
      background-color: #020f23;
      color: #fff;
      text-align: center;
      padding: 30px 15px;
      position: relative;
      bottom: 0;
      width: 100%;
    }

    .footer-links {
      margin-bottom: 15px;
    }

    .footer-links a {
      color: #7f9dda;
      margin: 0 12px;
      text-decoration: none;
      font-size: 14px;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    .social-icons {
      margin: 15px 0;
    }

    .social-icons a {
      margin: 0 10px;
      display: inline-block;
    }

    .social-icons img {
      width: 28px;
      height: 28px;
      transition: transform 0.3s ease;
    }

    .social-icons img:hover {
      transform: scale(1.2);
    }

    .copyright {
      font-size: 13px;
      color: #ccc;
    }
  </style>
</head>

<body class="pagina-inicio">


  <div class="container">
    <h1>HERE ME</h1>
    <a href="inversion.php" class="btn">Invertir</a>
    <a href="buscar_trabajo.php" class="btn">Buscar trabajo</a>
    <a href="buscartrabajadores.php" class="btn">Buscar trabajadores</a>

    <img src="logo_2-removebg-preview.png" alt="logo" class="logo"/>

    <a href="log_in.php">
      <img src="image-removebg-preview.png" alt="Inicio de sesión" class="login" />
    </a>
  </div>


  <footer>
    <div class="footer-links">
      <a href="index.php">Inicio</a>
      <a href="nosotros.php">Nosotros</a>
      <a href="vision.php">Visión</a>
      <a href="mision.php">Misión</a>
      <a href="contacto.php">Contacto</a>
    </div>
 
    <div class="social-icons">
  <a href="https://www.instagram.com/hereme.oficial/" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" alt="Instagram">
  </a>
  <a href="https://facebook.com" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook">
  </a>
  <a href="https://x.com/HEREME_OFICIAL" target="_blank">
    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968958.png" alt="X">
  </a>
</div>


    <div class="copyright">
      &copy; <?php echo $year; ?> HERE ME. Todos los derechos reservados.
    </div>
  </footer>

</body>
</html>




