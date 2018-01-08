<?php
    session_start();

    $name = isset($_SESSION['name']) ? $_SESSION['name']
          : 'Guest';

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Kirjautuminen</title>
   </head>
   <body>
     <?php $xml = simplexml_load_file('projektit.xml'); ?>
     <?php $i = 0; ?>
     <?php foreach($xml->projektit->projekti as $projekti): ?>
     <h1>Hello <?php echo $name; ?></h1>
     <a href="projektinmuokkaus.php?id=<?php echo $i++;?>">Tästä pääset muokkaamaan projektia</a>
<?php endforeach; ?>

     <style>

      body {
        text-align: center;
        margin-top: 80px;
      }

     </style>

   </body>
 </html>
