<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Encuesta para Buscar </title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #d9a7c7, #fffcdc); /* colores cambiados */
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

    input:focus, select:focus {
      border-color: #9b59b6; /* color morado */
      outline: none;
      box-shadow: 0 0 5px rgba(155, 89, 182, 0.6);
    }

    button {
      background: #9b59b6; /* botón morado */
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
      background: #8e44ad; /* tono más oscuro al pasar el mouse */
      transform: scale(1.03);
    }
  </style>
</head>
<body>

  <form action="Index.html" method="post">
    <h2>Encuesta para Empresas que Buscan Trabajadores</h2>
    
    <label>Nombre de la empresa:</label>
    <input type="text" name="empresa" required>

    <label>Cargo a cubrir:</label>
    <input type="text" name="cargo" required>

    <label>Experiencia mínima requerida (años):</label>
    <input type="number" name="experiencia" min="0" required>

    <label>Modalidad:</label>
    <select name="tipo" required>
      <option value="">Selecciona...</option>
      <option>Presencial</option>
      <option>Remoto</option>
      <option>Híbrido</option>
    </select>

    <button type="submit">Enviar</button>
  </form>

</body>
</html>

