<?php
    session_start();

    // Tarkastetaan onko kirjauduttu
    if (!isset($_SESSION['name'])) {
      header('Location: kirjautuminen.php');
    }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="container">


    <div class="style">

      <form action="tallennaprojekti.php" method="get">

    <label><b>Nimi:</b></label>
    <input type="text" placeholder="" name="nimi">

    <label><b>Päivämäärä:</b></label>
    <input type="text" placeholder="" name="päivämäärä">

    <label><b>Projektin kuvaus:</b></label>
    <input type="text" placeholder="" name="kuvaus">

    <label><b>Mitä opin?</b></label>
    <input type="text" placeholder="" name="oppiminen">

    <label><b>Linkki Projektiin</b></label>
    <input type="text" placeholder="" name="linkki">

    <input type="submit" class="button" value="Tallenna">
    <a href="./">Takaisin</a>

  </div>
  </div>
  </form>

    <style>

    h1 {
      text-align: center;
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

    .container {
      padding: 20px 600px;

    }

    b {
      font-family: 'Roboto Slab', serif;
    }

    .style {
      background-color: #a7ebf2;
      opacity: 0.85;
      padding: 10px 20px 10px 20px;
      font-family: 'Roboto Slab', serif;
    }

    form textarea {
      width: 100%;
      padding: 5px 15px;
      box-sizing: border-box;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: white;
    }

    a {
        text-decoration: none;
        font-size: 20px;
        color: black;
        font-family: 'Roboto Slab', serif;

    }

    a.btn {
      font-size: 15px;
      color: rgb(41, 37, 37);
    }

    .button {
      float: right;
      padding: 5px 5px 5px 5px;
      font-size: 15px;
      border: 1.5px solid black;
      border-radius: 5px;
      cursor: pointer;
      margin: 0px 5px;
      font-family: 'Roboto Slab', serif;
      background-color: rgb(30, 149, 0);
      color: white;
    }

    </style>

  </body>
</html>
