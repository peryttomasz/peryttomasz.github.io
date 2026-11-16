<?php
session_start();

if (!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] !== true) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['wyloguj'])) {
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona Zabezpieczona</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Strona zabezpieczona</h1>
    <p>Witaj, <strong><?php echo $_SESSION['uzytkownik']; ?></strong>! Udało Ci się zalogować.</p>
    <p>Ta treść jest widoczna tylko dla osób z ważną sesją.</p>

    <form method="POST">
        <button type="submit" name="wyloguj">Wyloguj się</button>
    </form>
</body>
</html>
