<?php
session_start();
var_dump($_SESSION);
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
<?php $i = intval($_GET['id']); ?>

<label><b>Nimi:</b></label>
<p><?php echo $xml->projektit->projekti[$i]->nimi; ?></p>

<label><b>Päivämäärä:</b></label>
<p><?php echo $xml->projektit->projekti[$i]->päivämäärä; ?></p>

<label><b>Projektin kuvaus:</b></label>
<p><?php echo $xml->projektit->projekti[$i]->kuvaus; ?></p>

<label><b>Mitä opin?</b></label>
<p><?php echo $xml->projektit->projekti[$i]->oppiminen; ?></p>

<label><b>Linkki Projektiin</b></label>
<p><a class="btn" href=" <?php echo $xml->projektit->projekti[$i]->linkki;?>"> <?php echo $xml->projektit->projekti[$i]->nimi; ?></a></p>

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
    font-size: 20px;
    font-family: Verdana, Geneva, sans-serif;
    text-decoration: none;
  }

  a.btn {
    font-size: 15px;
    color: rgb(41, 37, 37);
  }

  </style>

  </body>
</html>
