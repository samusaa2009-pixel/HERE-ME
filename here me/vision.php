<?php
$year = date("Y");
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Visión - HERE ME</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #4b6cb7, #182848);
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
      width: 70%;
      max-width: 700px;
      text-align: center;
      margin-top: 100px;
      margin-bottom: 120px;
      color: #ffffff;
      animation: fadeIn 1.5s ease;
    }

    h1 {
      color: #7f9dda;
      margin-bottom: 25px;
      font-size: 42px;
    }

    p {
      font-size: 18px;
      line-height: 1.7;
      color: #dcdcdc;
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

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Visión</h1>
    <p>
      Ser la plataforma líder que transforma la forma en que las personas encuentran trabajo, 
      las empresas encuentran talento y los inversionistas descubren oportunidades. 
      Soñamos con una comunidad digital que impulse el crecimiento personal, 
      profesional y económico de miles de personas en todo el mundo.
    </p>
  </div>
  
    <footer>
    &copy; <?php echo $year; ?> | Proyecto Talento e Inversión
  </footer>
</body>
</html>
