<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="bootstrap.min.css">
  <title>vote</title>
</head>
<body>
<div class="container">
  <?php
  if (isset($_POST["vote"])){
  if ($_COOKIE["vote"] == "non") {
    setcookie("vote", "oui", time() + 100000, null, null, false, true);
    echo "votre vote a ete pris en consideration,merci";
  } else { ?>
    <div class="alert alert-danger"><?= "vous avez deja vote" ?></div>
  <?php } }else{
      header("location:index.php");
  }?>

</div>
</body>
</html>
