<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Inicio de Sesión</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #83a4d4, #b6fbff);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    form {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      width: 350px;
      text-align: center;
    }

    h2 {
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin: 10px 0 5px;
      text-align: left;
      font-weight: bold;
      color: #444;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      margin-bottom: 15px;
      transition: 0.3s;
    }

    input:focus {
      border-color: #2980b9;
      outline: none;
      box-shadow: 0 0 5px rgba(41, 128, 185, 0.6);
    }

    button {
      background: #2980b9;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
      width: 100%;
    }

    button:hover {
      background: #1f6391;
      transform: scale(1.03);
    }
  </style>
</head>
<body>

  <form action="index.html" method="post" enctype="multipart/form-data">
    <h2>Inicio de Sesión</h2>

    <label for="usuario">Usuario o correo:</label>
    <input type="email" id="usuario" name="usuario" placeholder="correo@ejemplo.com" required>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" required>

    <label for="telefono">Teléfono:</label>
    <input type="tel" id="telefono" name="telefono" placeholder="300 000 0000" required>

    <label for="cv">Subir hoja de vida:</label>
    <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>

    <button type="submit">Ingresar</button>
  </form>

</body>
</html>
