<?php require 'C:\xampp\htdocs\web\club.php';

$club1=new Club('','','',' ','');
$club1->setNom($_POST['nom']);
$club1->setNom($_POST['nom']);
$club1->setId($_POST['id']);
$club1->setDes($_POST['description']);
$club1->setad($_POST['adresse']);
$club1->setdom($_POST['dom']);

var_dump($club1);
//$club1->description=($_POST['description']);
//$club1->adresse=($_POST['adresse']);

//$club1->domaine=($_POST['dom']);
?>