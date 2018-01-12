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
<form name="lomake">



<div class="style">

<?php $xml = simplexml_load_file('projektit.xml'); ?>

<label><b>Nimi:</b></label>
<input type="text" placeholder="" name="nimi" value="<?php echo $xml->projektit->projekti[$i]->nimi; ?>">

<label><b>Päivämäärä:</b></label>
<input type="text" placeholder="" name="päivämäärä" value="<?php echo $xml->projektit->projekti[$i]->päivämäärä; ?>">

<label><b>Projektin kuvaus:</b></label>
<textarea name="desc"><?php echo $xml->projektit->projekti[$i]->kuvaus; ?></textarea>

<label><b>Mitä opin?</b></label>
<textarea name="desc"><?php echo $xml->projektit->projekti[$i]->oppiminen; ?></textarea>

<a href="./">Takaisin</a>
<input type="button" class="button" value="Poista projekti">
<input type="submit" class="button" value="Tallenna">

<a href="kirjaudu-ulos.php">Kirjaudu ulos</a>

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
    font-size: 20px;
    font-family: Verdana, Geneva, sans-serif;
    text-decoration: none;
  }

  .button {
    float: right;
    padding: 5px 5px 5px 5px;
    font-size: 15px;
    border: 1.5px solid rgb(66, 66, 66);
    border-radius: 5px;
    cursor: pointer;
    margin-left: 10px;
  }

  </style>

  </body>
</html>
