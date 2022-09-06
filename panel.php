<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
    <h1>ADMIN PANEL</h1>

    <?php
    if (isset($_SESSION["user"])) {
        echo $_SESSION["user"];
    } else {
        header("Location: index.php");
    }
    ?>

    <a href="./close_session.php">Cerrar sesión</a>
</body>

</html>
 