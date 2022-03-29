<?php
if (!isset($_COOKIE["vote"]) || empty($_COOKIE["vote"])) {
  setcookie("vote", "non", time() + 100000, null, null, false, true);
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">


  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="bootstrap.min.css">

  <meta name="theme-color" content="#fafafa">
</head>

<body>
<div class="container" id="div10">
  <form action="vote.php" method="post">

    <div class="mb-3 form-check">
      <input type="radio" name="vote" class="form-check-input" value="bon" id="radio1">
      <label class="form-check-label" >Bon :)</label>
    </div>
    <div class="mb-3 form-check">
      <input type="radio" name="vote" class="form-check-input" value="moyen" id="radio2">
      <label class="form-check-label">Moyen :|</label>
    </div>
    <div class="mb-3 form-check">
      <input type="radio" name="vote" class="form-check-input" value="moyen" id="radio3">
      <label class="form-check-label" >Mauvais :(</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
<script src="timeout.js"></script>
</body>

</html>
