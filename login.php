<?php
session_start();

if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true) {
    header("Location: tajna.php");
    exit();
}

$komunikat = "";

if (isset($_POST['zaloguj'])) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if ($login === "admin" && $haslo === "tajne123") {
        $_SESSION['zalogowany'] = true;
        $_SESSION['uzytkownik'] = $login;
        header("Location: tajna.php");
        exit();
    } else {
        $komunikat = "Błędny login lub hasło!";
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Logowanie do systemu</h1>

    <?php if ($komunikat !== "") echo "<p style='color:red;'>$komunikat</p>"; ?>

    <form method="POST" action="">
        <label>Login:</label>
        <input type="text" name="login" value="admin"><br>

        <label>Hasło:</label>
        <input type="password" name="haslo" value="tajne123"><br>

        <button type="submit" name="zaloguj">Zaloguj się</button>
    </form>
</body>
</html>
