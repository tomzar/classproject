<?php /*

$result = db::query("
SHOW TABLES

");

// var_dump($result->fetchALL);

require_once 'smarty.php';
// require_once 'db.php';

//$stmt = $pdo->prepare('SELECT id, name FROM products');
//$stmt->execute();
//$products = $stmt->fetchALL();

$pdo = db::pdo();

$statement = $pdo->prepare("
SOME SQL WITH :SUBSTITUABLE
");

$statement->execute(array(
':substituable' => 'my_value'));

$result = db::execute("
 SOME SQL WITH :substituable
".
array(
':substituable' => 'my_value'
));
//$smarty->assign('products', $products);
/*
we need to define a middle ground here, we need to pass a name to the template file
we do that by method called assign
whatever is written in the first parameter needs to be written in the template */
// $smarty->display('productlist.tpl');
/* var_dump($smarty); */
 ?>
