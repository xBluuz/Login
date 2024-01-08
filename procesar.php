<?php
include("./conn.php");
$conn = sqlconn();

function addUser($user, $email, $password)
{
    global $conn;
    $sql = "INSERT INTO login1(user, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $user, $email, $password);

    try {
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    } catch (mysqli_sql_exception $e) {

        if ($e->getCode() == 1062) {
            return false;
        } else {
            throw $e;
        }
    }
}

if (!empty($_POST['send'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = hash("sha256", $_POST['password']);


    if (empty($user) || empty($email) || empty($password)) {
        echo "<div class='alerta2'>Por favor, completa todos los campos.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<div class='alerta3'>Por favor, introduce una dirección de correo electrónico válida.</div>";
    } else {

        if (addUser($user, $email, $password)) {
            header("Location: index.php");
        } else {
            echo "<div class='alerta4'><p>Usuario o Email ya usado. Por favor, inténtalo de nuevo.</p></div>";
        }
    }
}
?>