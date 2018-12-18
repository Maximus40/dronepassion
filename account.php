<?php 
include('inc/header.php');
require 'inc/account.php';
?>


<h1>Bonjour <?= $_SESSION['auth']->username; ?>,</h1>

<form  action="" method="post">

  <div class="form-group col-md-3">
    <input class="form-control" type="password" name="password" placeholder="Changer de mot de passe"/>

  </div>

  <div class="form-group col-md-3 ">
    <input class="form-control" type="password" name="password_confirm" placeholder="Confirmation du mot de passe"/>

  </div>

<button  class="btn btn-primary">Channger mon mot de passe</button>


</form>