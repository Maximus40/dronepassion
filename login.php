<?php
include('inc/header.php');?>

<div class="container login">
  <h1>Se connecter</h1>

  <form action="" method="POST" >
      <div class="form-group">


       <label>Pseudo</label>

         <input type="text" name="username" class="form-control col-sm-2" placeholder="Pseudo" />

    </div>

    <div class="form-group ">

      <label>Mot de passe </label>

       <input type="Password" name="password"class="form-control col-sm-2" placeholder="Mot de passe"/>

    </div>
        <button type="submit" class="btn btn-primary btn_login">Se connecter</button>
        
  </form>
</div>
</form>