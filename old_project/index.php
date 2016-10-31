<?php



var_dump($_GET);
// we get the page name from $_GET
define('DOCROOT', __DIR__);
require(DOCROOT.'/system/config/bootstrap.php');
$controller = router::getController();



/* $pdo = new PDO('mysql:host=classproject,dbname=bootcamp,charset=utf8', 'mesut', 'ozil');
$stmt = $pdo->prepare('SELECT id, name FROM product');
$stmt->execute();
$products = $stmt->fetchALL(); */

// we determine which controller to use based on the page name
// require_once('system/libraries/router.class.php')
//  $controller = router::getController(); - homework!

 ?>

<!DOCTYPE.html>
 <html>
    <head>
      <meta charset="utf-8">
      <title>My Page</title>
    </head>
    <body>

    <nav>
      <ul>
      <li><a href="index.php?page=contact">Contact</a></li>
      <li><a href="index.php?page=products">Product</a></li>
      <li><a href="index.php">Home</a></li>
    </ul>
    </nav>
</body>
</html>
<!-- we include the controller that we determined -->
 <?php
 include($controller);
 /* setting up a code to run more pages from this file */
  ?>
