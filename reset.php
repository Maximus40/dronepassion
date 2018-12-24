

<?php require ('inc/header.php'); ?>


<h1>Réinitialiser mon mot de passe</h1>



<form action="inc/reset.php" method="POST">


    <div class="form-group">

      <label >Mot de passe </label>

      <input type="Password" name="password"class="form-control" />

    </div>


    <div class="form-group">

      <label>Confirmation du Mot de passe</label>

      <input type="Password" name="password_confirm"class="form-control" />

    </div>

    <button type="submit" class="btn btn-primary">Réinitialiser mon mot de passe</button>
  </form>


<?php require ('inc/footer.php'); ?>
