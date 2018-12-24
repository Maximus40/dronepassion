<?php require 'inc/header.php'; ?>

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

<form action="inc/register.php" method="POST">
    <div class="form-group">

      <label >Pseudo</label>

      <input type="text" name="username" class="form-control" />

    </div>

    <div class="form-group">

      <label>Email</label>

      <input type="text" name="email"  class="form-control" />

    </div>

    <div class="form-group">

      <label >Mot de passe</label>

      <input type="Password" name="password"class="form-control" />

    </div>

    <div class="form-group">

      <label>Confirmez votre mot de passe</label>

      <input type="Password" name="Password_confirm"class="form-control" />

    </div>

    <button type="submit" class="btn btn-primary">M'inscrire</button>
  </form>



<?php require 'inc/footer.php'; ?>
