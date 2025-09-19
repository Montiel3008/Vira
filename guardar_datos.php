<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    $archivo = "contactos.csv";

    $fp = fopen($archivo, "a");

    $linea = '"' . $nombre . '","' . $email . '","' . $mensaje . '"' . "\n";

    fwrite($fp, $linea);
    fclose($fp);

    header("Location: index.html?enviado=1");
    exit;
}
?>
