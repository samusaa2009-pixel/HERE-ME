<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "<h2>Datos recibidos:</h2>";
    foreach ($_POST as $campo => $valor) {
        echo "<strong>$campo:</strong> $valor <br>";
    }
}
?>