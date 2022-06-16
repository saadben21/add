<?php
$name_host='localhost';
$name_user='root';
$password='';
$name_db='form_captcha';
$dsn="mysql:host=$name_host;dbname=$name_db";
if($dsn){
  $connection = new PDO($dsn, $name_user, $password);
  echo 'connexion réussie';
}
else{
  echo 'connexion échouée';
}
?>