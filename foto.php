<?php
// Obtener el tiempo actual
$tiempoActual = time();

// Ejecutar el comando para tomar una fotografía
exec('fswebcam -r 640x480 /ruta/a/fotografia.jpg');

// Enviar correo electrónico con la fotografía adjunta
$to = 'dennisdelarosa81@gmail.com';
$subject = 'Fotografía tomada';
$message = 'Se ha tomado una fotografía. Adjunta está la imagen.';
$headers = 'From: dennisdelarosa250@gmail.com' . "\r\n" .
    'Reply-To:dennisdelarosa81@gmail.com' . "\r\n" .
    'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-Disposition: attachment; filename=fotografia.jpg' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

// Adjuntar la fotografía al correo electrónico
$file_path = '/ruta/a/fotografia.jpg';
$file = fopen($file_path, 'rb');
$file_data = fread($file, filesize($file_path));
fclose($file);
$attachment = chunk_split(base64_encode($file_data));

// Enviar correo electrónico con la fotografía adjunta
mail($to, $subject, $message, $headers, '-f dennisdelarosa250@gmail.com', '-oi -f dennisdelarosa81@gmail.com');
?>
