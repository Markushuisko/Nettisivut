<?php
session_start();

// Tarkastetaan onko kirjauduttu
if (!isset($_SESSION['name'])) {
  header('Location: kirjautuminen.php');
}


if (empty($_GET)) {
  die("Et tättänyt lomaketta");
}

$nimi = $_GET['nimi'];
$päivämäärä = $_GET['päivämäärä'];
$kuvaus = $_GET['kuvaus'];
$mitäopin = $_GET['oppiminen'];
$linkki = $_GET['linkki'];

if (empty($nimi)) $errors[] = 'Et antanut nimeä';
if (empty($päivämäärä)) $errors[] = 'Et antanut päivämäärää';
if (empty($kuvaus)) $errors[] = 'Et antanut kuvausta';

if (!empty($errors)) {
  $output = '<ul><li>' . implode('</li><li>',$errors) . '</li></ul>';
} else {
  $output = 'Lomake täytetty ja aloitetaan tallennus';

$xml = simplexml_load_file('projektit.xml');
$uusiProjekti = $xml->projektit->addChild('projekti');
$uusiProjekti->addChild('nimi',$nimi);
$uusiProjekti->addChild('päivämäärä',$päivämäärä);
$uusiProjekti->addChild('oppiminen',$mitäopin);

if (!empty($mitäopin)) $uusiProjekti->addChild('oppiminen', $mitäopin);

$dom = new DOMDocument("1.0");
  $dom->preserveWhiteSpace = false;
  $dom->formatOutput = true;
  $dom->loadXML($xml->asXML());
  $dom->save('projektit.xml');
}
header('refresh:2;url=index.php');
