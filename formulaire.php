<?php
session_start();
require_once 'bdd.php';
$first_num = rand(1, 10);
$second_num = rand(1, 10);
$operators = ['+', '-', '*'];
$operator = rand(0,count($operators)-1);
$operator = $operators[$operator];
$messageinfos="Pour des raisons de sécurité, et et éviter le spam, merci de résoudre l'opération suivante :"; 
$question = 0;
switch ($operator) {
    case '+':
        $question = $first_num + $second_num;
        break;
    case '-':
        $question = $first_num - $second_num;
        break;
    case '*':
        $question = $first_num * $second_num;
        break;
}
$_SESSION["question"] = $question;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="Captcha.php" method="POST"id="myForm">
    <h1>Veuillez Remplir Le Formulaire</h1>
        <div class="form-group">
            <input type="text" name="name"placeholder="name">
        </div>
        <div class="form-group">
            <input type="text" name="prenom" placeholder="prenom">
        </div>
        <div class="form-group">
            <input type="text" name="email" placeholder="email">
        </div>
        <div class="form-group">
            <input type="text" name="phone" placeholder="phone">
        </div>
        <div class="form-group">
            <input type="text" name="sujet" placeholder="sujet">
        </div>
        <div class="form-group">
            <textarea name="message" id="" cols="30" rows="10" placeholder="message"></textarea>
        </div>
            <?php echo $messageinfos.' '.$first_num . ' ' . $operator . ' ' . $second_num . ' = '; ?>
        <div class="form-group">
            <input type="number" name="question" placeholder="captcha">
        </div>
        <div class="form-group">
            <button type="submit"name="submit">envoyer</button>
        </div> 
        <div id="res"></div>
    </form>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/form.js"></script>
</body>
</html>
<?php


