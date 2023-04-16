<?php
// Obtener los estados de los checkboxes
$gpio17 = isset($_POST['gpio17']) ? $_POST['gpio17'] : 0;
$gpio21 = isset($_POST['gpio21']) ? $_POST['gpio21'] : 0;
$gpio27 = isset($_POST['gpio27']) ? $_POST['gpio27'] : 0;

// Escribir los estados en los archivos de texto
file_put_contents('gpio17.txt', $gpio17);
file_put_contents('gpio21.txt', $gpio21);
file_put_contents('gpio27.txt', $gpio27);

// Enviar correos electrónicos
if ($gpio17 == 1) {
    mail('dennisdelarosa250@gmail.com', 'GPIO 17 encendido', 'El GPIO 17 ha sido encendido.');
} else {
    mail('dennisdelarosa250@gmail.com', 'GPIO 17 apagado', 'El GPIO 17 ha sido apagado.');
}

if ($gpio21 == 1) {
    mail('dennisdelarosa250@gmail.com', 'GPIO 21 encendido', 'El GPIO 21 ha sido encendido.');
} else {
    mail('dennisdelarosa250@gmail.com', 'GPIO 21 apagado', 'El GPIO 21 ha sido apagado.');
}

if ($gpio27 == 1) {
    mail('dennisdelarosa250@gmail.com', 'GPIO 27 encendido', 'El GPIO 27 ha sido encendido.');
} else {
    mail('dennisdelarosa250@gmail.com', 'GPIO 27 apagado', 'El GPIO 27 ha sido apagado.');
}

// Redireccionar a la página principal
header('Location: index.php');
exit();
?>

