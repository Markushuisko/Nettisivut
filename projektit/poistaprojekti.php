<?php

    if (isset($_GET['id'])) {
      $i = intval($_GET['id']);

    }
$xml = simplexml_load_file('projektit.xml');

$i = intval($_GET['id']);

unset($xml->projektit->projekti[$i]);

//tallennus
$dom = new DOMDocument("1.0");
$dom->preserveWhiteSpace = false;
$dom->formatOutput = true;
$dom->loadXML($xml->asXML());
$dom->save('projektit.xml');

header('Location:index.php');
