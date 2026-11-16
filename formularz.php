<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Dane osobowe - Formularz</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h1>Formularz danych osobowych</h1>

  <form method="POST" action="">
    <label>Imię:</label> 
    <input type="text" name="imie" placeholder="np. Jan"><br>

    <label>Nazwisko:</label> 
    <input type="text" name="nazwisko" placeholder="np. Kowalski"><br>

    <label>Ulica:</label> 
    <input type="text" name="ulica" placeholder="np. Kwiatowa 12"><br>

    <label>Miasto:</label> 
    <input type="text" name="miasto" placeholder="np. Warszawa"><br>

    <label>Hasło:</label> 
    <input type="password" name="haslo"><br>

    <label>Data urodzenia:</label> 
    <input type="date" name="data"><br>

    <label>Telefon:</label> 
    <input type="tel" name="telefon" placeholder="123456789"><br>

    <label>E-mail:</label> 
    <input type="email" name="email" placeholder="nazwa@domena.pl"><br>
    
    <label>Województwo:</label>
    <select name="wojewodztwo">
      <option>mazowieckie</option>
      <option>małopolskie</option>
      <option>wielkopolskie</option>
      <option>lubelskie</option>
      <option>lubuskie</option>
      <option>podkarpackie</option>
      <option>pomorskie</option>
      <option>warmińsko-mazurskie</option>
      <option>świętokrzyskie</option>
      <option>opolskie</option>
      <option>dolnośląskie</option>
      <option>zachodniopomorskie</option>
      <option>łódzkie</option>
      <option>śląskie</option>
      <option>podlaskie</option>
      <option>kujawsko-pomorskie</option>
    </select><br>

    <label>Uwagi:</label> 
    <textarea name="uwagi" rows="4" cols="30"></textarea><br>
    
    <label>Prawo jazdy:</label>
    <input type="radio" name="prawo_jazdy" value="tak"> Posiadam
    <input type="radio" name="prawo_jazdy" value="nie" checked> Nie posiadam<br>
    
    <button type="submit" name="wyslano">Wyślij</button>
    <button type="reset">Wyczyść formularz</button>
  </form>

  <hr>

  <?php
    if (isset($_POST['wyslano'])) {
        echo "<h2>Wprowadzone dane:</h2>";
        echo "Imię: " . htmlspecialchars($_POST['imie']) . "<br>";
        echo "Nazwisko: " . htmlspecialchars($_POST['nazwisko']) . "<br>";
        echo "Ulica: " . htmlspecialchars($_POST['ulica']) . "<br>";
        echo "Miasto: " . htmlspecialchars($_POST['miasto']) . "<br>";
        echo "Data urodzenia: " . htmlspecialchars($_POST['data']) . "<br>";
        echo "Telefon: " . htmlspecialchars($_POST['telefon']) . "<br>";
        echo "E-mail: " . htmlspecialchars($_POST['email']) . "<br>";
        echo "Województwo: " . htmlspecialchars($_POST['wojewodztwo']) . "<br>";
        echo "Uwagi: " . nl2br(htmlspecialchars($_POST['uwagi'])) . "<br>";
        $prawoJazdy = isset($_POST['prawo_jazdy']) ? $_POST['prawo_jazdy'] : 'brak';
        echo "Prawo jazdy: " . htmlspecialchars($prawoJazdy) . "<br>";
    }
  ?>

</body>
</html>
