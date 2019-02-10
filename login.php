

<?php require ('inc/header.php'); ?>


<h1>Se connecter</h1>



<form action="inc/login.php" method="POST">
    <div class="form-group">

      <label >Pseudo ou email</label>

      <input type="text" name="username" class="form-control" />

    </div>

    <div class="form-group">

      <label >Mot de passe <a href="forget.php"> (J'ai oublié mon mot de passe)</a></label>

      <input type="Password" name="password"class="form-control" />

    </div>

    <div class="form-group">
      <label>
        <input type="checkbox" name="remember" value="1"> Se souvenir de moi
      </label>

    </div>

    <button type="submit" class="btn btn-primary btn-form">Se connecter</button>
  </form>


<?php require ('inc/footer.php'); ?>
