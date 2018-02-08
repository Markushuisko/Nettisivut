<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projektit</title>
  </head>

  <body>
    <h1>Projektit</h1>

    <div class="container">
      <div class="header">

          <a class="login" href="kirjautuminen.php" >Kirjaudu sisään</a>
          <hr>
          <a class="logout" href="kirjaudu-ulos.php" >Kirjaudu ulos</a>

      </div>

      <nav>
        <?php $xml = simplexml_load_file('projektit.xml'); ?>
        <?php $i = 0; ?>
        <?php foreach($xml->projektit->projekti as $projekti): ?>
        <li>
          <a href="<?php echo $projekti->linkki; ?>" target="_blank"><?php echo $projekti->nimi; ?></a>
          <a href="projektinmuokkaus.php?id=<?php echo $i;?>" class="button green btn_right">Muokkaa</a>
          <a href="projektintiedot.php?id=<?php echo $i++;?>" class="button blue btn_right">Tiedot</a>
        </li>
        <?php endforeach; ?>

        <hr>
        <a href="uusiprojekti.php" class="button btn_big green">Lisää uusi projekti</a>

      </nav>
  </div>



    <style>

      .container {
        width: 80%;
        max-width: 1200px;
        min-width: 800px;
        margin: 100px auto;
      }

      div.header {
        float: left;
        width: 30%;
        border: 3px solid rgb(66, 66, 66);
        border-radius: 5px;
        text-align: center;
      }

      nav {
        float: right;
        text-align: left;
        margin: 0px 0px 0px 50px;
        width: 60%;

        border: 3px solid #73AD21;
        padding: 5px;
        font-size: 20px;
      }



      p {
        font-size: 20px;
      }

      h1 {
        text-align: center;
        font-family: 'Roboto Slab', serif;
      }



      li {
        padding: 5px 5px;
      }

      .button {
        border: 1.5px solid rgb(66, 66, 66);
        cursor: pointer;
        color: white;
        font-family: 'Roboto Slab', serif;
        border-radius: 5px;
        font-size: 15px;
        margin-right: 5px;
        padding: 2px;
        text-align: center;
      }

      .blue {
        background-color: rgb(13, 182, 251);
      }

      .green {
        background-color: rgba(6, 187, 13, 0.93);
      }

      .btn_right {
        float: right;
      }

      .btn_big {
        padding: 10px 30px;
        width: 80%;
        border-radius: 20px;
        margin: 10px auto;
        font-size: 20px;
      }

      a {
        text-decoration: none;
      }



      .login {
        background-color: rgb(121, 167, 13);
        color: white;
        font-family: 'Roboto Slab', serif;
        padding: 5px ;
        border-radius: 5px;
        font-size: 20px;
        display: block;
        margin: 5px 10px;
      }

      .logout {
        background-color: rgb(125, 35, 35);
        color: white;
        font-family: 'Roboto Slab', serif;
        padding: 5px;
        border-radius: 5px;
        font-size: 20px;
        display: block;
        margin: 5px 10px;
      }

      /*Use a media query to add a breakpoint at 800px:*/
      @media (max-width:800px) {
        body {
          background-color: red;
        }

        .container{

          }

        .header, nav {
          width: 100%;
          margin: 0px;
          float: none;
          clear: both;
          max-width: none;
          min-width: none;
        }

      }

    </style>

  </body>
</html>
