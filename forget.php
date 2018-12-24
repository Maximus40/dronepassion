
<?php require ('inc/header.php'); ?>


<h1>Mot de passe oublier</h1>



<form action="inc/forget.php" method="POST">
    <div class="form-group">

      <label>email</label>

      <input type="email" name="email" class="form-control" />

    </div>

        <button type="submit" class="btn btn-primary">Se connecter</button>
  </form>


<?php require ('inc/footer.php'); ?>
