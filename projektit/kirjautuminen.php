<?php
    session_start();
    var_dump($_SESSION);

    if (isset($_POST['submit'])) {
      // Kirjautumisen tsekkaus tähän väliin sitten kun ajankohtaista

      $_SESSION['name'] = htmlentities($_POST['name']);

      header('Location: index.php');
    }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Kirjautuminen</title>

    <script src="main.js"></script>

  </head>
  <body>


  <div class="container">
  <div class="style">

    <h1>Kirjaudu</h1>
    <hr>

<form name="lomake" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

  <label><b>Käyttäjän nimi:</b></label>
  <input type="text" placeholder="" name="name">

  <label><b>Salasana:</b></label>
  <input type="text" placeholder="" name="nimi">

  <input type="submit" name="submit" value="Kirjaudu">

</form>


  </div>
  </div>


    <style>

    h1 {
      text-align: center;
    }

    .style {
      background-color: rgb(39, 175, 175);
      padding: 10px 20px 10px 20px;
    }

    .container {
      padding: 20px 800px;
    }

    input[type="text"] {
      width: 100%;
      padding: 5px 15px;
      box-sizing: border-box;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: white;
    }


    </style>
  </body>
</html>
