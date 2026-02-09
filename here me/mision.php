<?php
$year = date("Y");
$mission = "Conectar a personas que buscan trabajo con empresas que necesitan talento, 
y crear un espacio donde también puedan participar inversionistas que quieran apoyar ideas con potencial. 
Queremos que encontrar empleo, contratar gente o invertir en proyectos sea más fácil, justo y accesible para todos.";
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>MISIÓN</title>
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
      color: #fff;
    }

    .mission-box {
      background-color: #020f23;
      border-radius: 15px;
      box-shadow: 0 25px 30px rgba(3, 5, 15, 0.6);
      padding: 40px;
      width: 70%;
      max-width: 700px;
      text-align: center;
      margin-top: 100px;
      margin-bottom: 120px;
      animation: fadeIn 1.5s ease;
    }

    .mission-box h1 {
      color: #7f9dda;
      margin-bottom: 25px;
      font-size: 42px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .mission-box p {
      font-size: 18px;
      line-height: 1.7;
      color: #dcdcdc;
    }

    footer {
      background-color: #020f23;
      color: #fff;
      text-align: center;
      padding: 20px;
      width: 100%;
      position: fixed;
      bottom: 0;
      font-size: 14px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>
  <div class="mission-box">
    <h1>MISIÓN</h1>
    <p><?php echo nl2br($mission); ?></p>
  </div>

  <footer>
    &copy; <?php echo $year; ?> | Proyecto Talento e Inversión
  </footer>
</body>
</html>


