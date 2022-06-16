<?php
require_once 'bdd.php';
require_once 'formulaire.php';

$sql = "CREATE TABLE IF NOT EXISTS `form_captcha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `captcha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);";
$connection->exec($sql);
// insert into 
if(isset($_POST['submit'])){
  if(empty($_POST['name']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['sujet']) || empty($_POST['message']) || empty($_POST['question'])){
    echo '<script>alert("tous les champs sont obligatoires")</script>';
  }else{
    $name = $_POST['name'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];
    $captcha = $_POST['question'];
    $sql = "INSERT INTO `form_captcha` (`name`, `prenom`, `email`, `phone`, `sujet`, `message`, `captcha`) VALUES ('".$name."', '".$prenom."', '".$email."', '".$phone."', '".$sujet."', '".$message."', '".$captcha."')";
    $connection->exec($sql);
    echo '<script>alert("votre message a été envoyé")</script>';
  }
 
}
?>
