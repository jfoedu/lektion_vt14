<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
<title>Mallsida</title>
</head>
<body>
  <!-- Nedan själva sidan, där skall du klista in texten och tagga den med rätt taggar -->

  <?php
  error_reporting(E_ALL ^E_NOTICE);
  //print_r($_POST);
  //print_r($_GET);
  echo gettype($_POST['tal1sd']);
  if ($_POST['tal1'] < $_POST['tal2']) {
    echo "<h1>" . $_POST['tal2'] . " var störst!</h1>";
  }
  // kommentar
  ?>

  <form action="" method="post">
    Ange tal 1 <input type="text" name="tal1"><br /> Ange tal 2 <input
      type="text" name="tal2"><br /> <input type="submit" name="submit"
      value="Login">
  </form>
  <!-- Slut på sidan -->
</body>
</html>
