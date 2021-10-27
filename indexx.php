
<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['username']; ?>!</h1>
    <p>.........</p>
    <a href="logout.php">Déconnexion</a>
    </div>
  </body>
</html>