<?php
include('inc/header.php');?>

    <div class="container login">
        <h1>S'inscrire</h1>

            <form method="post" action="register.php">
                <div class="form-group col-md-3">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group col-md-3">
                    <label for="pseudo">Pseudo</label>
                    <input id="pseudo" class="form-control" type="text" placeholder="Pseudo">
                </div>
                <div class="form-group col-md-3">
                    <label for="password">Mot de passse</label>
                    <input id="password" class="form-control" type="text" placeholder="Mot de passe">
                </div>
                <div class="form-group col-md-3">
                    <label for="password_confirm">Mot de passe (Confirmation)</label>
                    <input id="password_confirm" class="form-control" type="text" placeholder="Mot de passe">
                </div>
            <button class="btn btn-primary btn_login" type="button">S'inscrire</button>
            



</form>