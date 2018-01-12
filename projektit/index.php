<?php
session_start();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
  <head>
      <link rel="stylesheet" type="text/css" href="tyylit.css">
      <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <meta charset="utf-8">
    <title>Projektit</title>
      <h1>Projektit</h1>
  </head>

  <body>

    <div class="container">
        <nav>
          <?php $xml = simplexml_load_file('projektit.xml'); ?>
          <?php $i = 0; ?>
          <?php foreach($xml->projektit->projekti as $projekti): ?>
          <li>
            <a href="<?php echo $projekti->linkki; ?>" target="_blank"><?php echo $projekti->nimi; ?></a>
            <a href="projektinmuokkaus.php?id=<?php echo $i;?>" class="button button2">Muokkaa</a>
            <a href="projektintiedot.php?id=<?php echo $i++;?>" class="button">Tiedot</a>
          </li>
          <?php endforeach; ?>


          <hr>
          <button class="button button3">Lisää uusi projekti</button>
        </nav>
    </div>



    <style>
      h1 {
        text-align: center;
        font-family: 'Roboto Slab', serif;
      }

      nav {
        text-align: left;
        margin: auto;
        width: 20%;
        height: 20%;
        border: 3px solid #73AD21;
        padding: 5px;
        font-size: 20px;
      }

      li {
        padding: 5px 5px;

      }

      .button {
        background-color: rgba(6, 187, 13, 0.93);
        border: 1.5px solid rgb(66, 66, 66);
        cursor: pointer;
        color: white;
        font-family: 'Roboto Slab', serif;
        border-radius: 5px;
        font-size: 15px;
        float: right;
        margin-right: 5px;
      }

      .button2 {
        background-color: rgb(13, 182, 251);
        float: right;
        font-size: 15px;
      }

      .button3 {
        text-align: center;
        padding: 10px 30px;
        width: 80%;
        border-radius: 20px;
        float: left;
        margin-left: 37px;
        margin-top: 8px;
        font-size: 20px;
      }

      a {
        text-decoration: none;

      }

    </style>

  </body>
</html>
