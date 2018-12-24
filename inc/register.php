<?php
 require_once 'functions.php';

 if(session_status()=== PHP_SESSION_NONE){
    session_start();
  }

if(!empty($_POST)) {

    $errors = array();

    require_once 'db.php';

if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){


    $errors['username'] = "Votre pseudo n'est pas valide (alphanumérique)";

  } else {
    $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');

    $req->execute([$_POST['username']]);

    $user = $req->fetch();

      if ($user) {
        $errors['username'] = 'Ce pseudo est déjà pris';
      }
  }

if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

  $errors['email'] = "Votre email n'est pas valide ";

} else {
  $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');

  $req->execute([$_POST['email']]);

  $user = $req->fetch();

    if ($user) {
      $errors['email'] = 'Cet email est déjà utiliser';
    }
}

if(empty($_POST['password']) || $_POST['password'] != $_POST['Password_confirm']){

  $errors['password'] = "Vous devez rentrer un mot de passe valide";

}
if(empty($errors)){

    // On enregistre les informations dans la base de données
    $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?, confirmation_token = ?");
    // On ne sauvegardera pas le mot de passe en clair dans la base mais plutôt un hash
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    // On génère le token qui servira à la validation du compte
    $token = str_random(60);
    $req->execute([$_POST['username'], $password, $_POST['email'], $token]);
    $user_id = $pdo->lastInsertId();
    // On envoit l'email de confirmation
    mail($_POST['email'], 'Confirmation de votre compte', "Afin de valider votre compte merci de cliquer sur ce lien\n\ndronepassion.test/confirm.php?id=$user_id&token=$token");
    // On redirige l'utilisateur vers la page de login avec un message flash
    $_SESSION['flash']['success'] = 'Un email de confirmation vous a été envoyé pour valider votre compte';
    header('Location: ../login.php');

    exit();

}
}
?>