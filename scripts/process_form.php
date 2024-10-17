<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Valida si todos los campos están completos
    if (empty($username)  || empty($password) || empty($confirm_password)) {
        echo "<script>alert('Complete todos los campos.'); window.history.back();</script>";
        exit;
    }

    // Valida que las contraseñas coincidan
    if ($password !== $confirm_password) {
        echo "<script>alert('Las contraseñas no coinciden.'); window.history.back();</script>";
        exit;
    }

    // Encriptar la contraseña
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Datos del usuario
    $user_data = array(
        'username' => $username,
        'password' => $password, // Contraseña en texto plano
        'hashed_password' => $hashed_password // Contraseña hasheada
    );

    // Lee o crea archivo de usuarios
    $file_path = '../data/users.json';
    if (file_exists($file_path)) {
        $json_data = file_get_contents($file_path);
        $data = json_decode($json_data, true);
    } else {
        $data = array();
    }

    // Añade los nuevos datos del usuario
    $data[] = $user_data;

    // Guardar los datos de vuelta en el archivo JSON
    file_put_contents($file_path, json_encode($data, JSON_PRETTY_PRINT));

    // Mostrar mensaje de éxito y redirigir
    echo "<script>
        alert('Thank you for completing the form.');
        setTimeout(function() {
            window.location.href = '" . $_SERVER['HTTP_REFERER'] . "';
        }, 1000); 
    </script>";
    exit;
}
?>