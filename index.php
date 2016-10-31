<?php

define('DOCROOT', __DIR__);
require(DOCROOT.'/system/config/bootstrap.php');

request::loadRequest();
$controller = router::getController();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My page</title>
</head>
<body>
  
  <nav>
    <a href="index.php">home</a>
    <a href="index.php?page=contact">contact form</a>
    <a href="index.php?page=products">products</a>
  </nav>

  <?php

  // we include the controller that we determined should be used
  include($controller);

  ?>

</body>
</html>
