<?php
include('inc/header.php');
require('inc/registration.php');
?>

    <div class="container login">
        
        <h1>S'inscrire</h1>

        <?php if(!empty($errors)): ?>

  <div class="alert alert-danger">
    <p>Vous n'avez pas remplis le formulaire correctement</p>
<ul>
    <?php foreach ($errors as $error): ?>

      <li><?= $error; ?> </li>
    <?php endforeach; ?>
  </ul>

  </div>


<?php endif; ?>

            <form method="post" action="register.php">
                <div class="form-group col-sm-3">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" placeholder="Email" name="email">
                </div>
                <div class="form-group col-sm-3">
                    <label for="pseudo">Pseudo</label>
                    <input id="username" class="form-control" type="text" placeholder="Pseudo" name="username">
                </div>
                <div class="form-group col-sm-3">
                    <label for="password">Mot de passe</label>
                    <input id="password" class="form-control" type="password" placeholder="Mot de passe" name="password">
                </div>
                <div class="form-group col-sm-3">
                    <label for="password_confirm">Mot de passe (Confirmation)</label>
                    <input id="password_confirm" class="form-control" type="password" placeholder="Mot de passe" name="password_confirm">
                </div>
            <input class="btn btn-primary btn_login" type="submit">S'inscrire
            
        </div>





</form>