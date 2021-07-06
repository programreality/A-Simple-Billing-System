<?php include 'navbar.php';
  session_start();
  $transid = mt_rand(11111,99999);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ASBS</title>
  </head>
  <body>
<div class="container text-center">
  <h1>Billing System heading changed</h1><br>
  <img src="logo.png" alt="asbs logo" class="img-circle" width="300px"><br><br><br>
  <form action="transaction.php" method="post">
    <input type="hidden" value=<?php echo "$transid"; $_SESSION['transid']=$transid; ?> name="transid" />
    <input class="btn btn-primary btn-lg" type="submit" name="transidsubmit" value="Start Billing">
  </form>
</div>
  </body>
</html>
