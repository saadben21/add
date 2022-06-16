<?php
session_start();
require_once 'bdd.php';
$question = $_SESSION["question"];
$user_question = $_POST["question"];
$str = '<img style="margin:0px auto;width:500px;height:500px;" src="image/ok.png">';
$str1 = '<img style="margin:0px auto;width:500px;height:500px;" src="image/no.png">';
if ($user_question == $question) {
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
    echo $str;
    echo '<h1>votre formulaire a bien été envoyer</h1>';
} else {
    echo $str1; 
    echo '<h1>votre formulaire n\'a pas été envoyer</h1>';
}
?>

