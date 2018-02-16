<?php
    session_start();

    // Tarkastetaan onko kirjauduttu
    if (!isset($_SESSION['name'])) {
      header('Location: kirjautuminen.php');
    }

    // Tarkastetaan GET-parametri id
    if (isset($_GET['id'])) {
      $_SESSION['projekti_id'] = intval($_GET['id']);
      $i = intval($_GET['id']);
    }

    // Tarkastetaan SESSIO-muuttuja projekti_id
    else if (isset($_SESSION['projekti_id'])) {
      $i = intval($_SESSION['projekti_id']);
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

<form action="tallennaprojekti.php" method="get">

<div class="style">

<?php $xml = simplexml_load_file('projektit.xml'); ?>

<label><b>Id:</b></label>
<input type="text" placeholder="" name="id" value="<?php echo $i; ?>">


<label><b>Nimi:</b></label>
<input type="text" placeholder="" name="nimi" value="<?php echo $xml->projektit->projekti[$i]->nimi; ?>">

<label><b>Päivämäärä:</b></label>
<input type="text" placeholder="" name="päivämäärä" value="<?php echo $xml->projektit->projekti[$i]->päivämäärä; ?>">

<label><b>Projektin kuvaus:</b></label>
<textarea name="kuvaus"><?php echo $xml->projektit->projekti[$i]->kuvaus; ?></textarea>

<label><b>Mitä opin?</b></label>
<textarea name="oppiminen"><?php echo $xml->projektit->projekti[$i]->oppiminen; ?></textarea>

<label><b>Linkki</b></label>
<input type="text" placeholder="" name="linkki" value="<?php echo $xml->projektit->projekti[$i]->linkki; ?>">

<a href="./">Takaisin</a>
<a class="button btn" href="poistaprojekti.php?id=<?php echo $i;?>">Poista projekti</a>
<input type="submit" class="button" value="Tallenna">


</div>
</div>
</form>

  <style>

  h1 {
    text-align: center;
  }

  input[type="text"] {
    width: 100%;
    padding: 5px;
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
    background-color: rgb(255, 45, 45);
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
