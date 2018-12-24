<?php

if(isset($_GET['id']) && isset($_GET['token'])){
    require 'db.php';
    require 'functions.php';
    $req = $pdo->prepare('SELECT * FROM users WHERE id = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');
    $req->execute([$_GET['id'], $_GET['token']]);
    $user = $req->fetch();
    if($user){
        if(!empty($_POST)){
            if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']){
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $pdo->prepare('UPDATE users SET password = ?, reset_at = NULL')->execute([$password]);
                if(session_status()=== PHP_SESSION_NONE){
                    session_start();
                  }
                $_SESSION['flash']['success'] = 'Votre mot de passe a bien été modifié';
                $_SESSION['auth'] = $user;
                header('Location: ../account.php');
                exit();
            }
        }
    }else{
        if(session_status()=== PHP_SESSION_NONE){
            session_start();
          }
        $_SESSION['flash']['error'] = "Ce token n'est pas valide";
        header('Location: ../login.php');
        exit();
    }
}else{
    header('Location: ../login.php');
    exit();
}


?>