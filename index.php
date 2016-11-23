<?php

$error = array();
if (!empty($_POST['submit'])) {
  echo 'Hello world !';
  $pseudo = trim(strip_tags($_POST['name']));

}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>KJDSNFDS</title>
  </head>
  <body>
    <header>
      <h1>Bonjour a tous</h1>
    </header>
    <section>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </section>

    <form class="formulaire_index" action="#" method="POST">
      <label for="name">Nom :</label>
      <input type="text" name="name" value=""> <br>

      <label for="surname">Prénom :</label>
      <input type="text" name="surname" value=""> <br>

      <label for="color">Votre couleur préférée :</label>
      <input type="color" name="color" value=""> <br>

      <label for="email">Email :</label>
      <input type="email" name="email" value=""> <br>

      <label for="message">Message :</label>
      <textarea name="message" rows="8" cols="80"></textarea> <br>

      <input type="submit" name="submit" value="Envoyer"> <br>

    </form>

  </body>
</html>
