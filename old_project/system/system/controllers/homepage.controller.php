HOMEPAGE

<?php

$input_value =   !empty($_POST['min_price'])  ?  htmlspecialchars($_POST['min_price'])  :  '';

?>

<form method="post" action="">
  <input type="text" name="min_price" value="<?php echo $input_value; ?>" />
  <input type="submit" value="Submit" />
</form>

<?php

// initialize the variable so that we can work with it without always asking if it isset()
$min_price = null;

// if there is min_price in $_POST
if(!empty($_POST['min_price']))
{
  // put it in the $min_price variable
  $min_price = (float)$_POST['min_price'];
}

// if the $min_price variable is not empty
if(!empty($min_price))
{
  // prepare a condition to be added to the MySQL query
  $min_price_condition = " `price` > :min_price";
}
else
{
  // prepare a condition to be added to the MySQL query that is always true
  $min_price_condition = "1";
}

// prepare the query (either WHERE 1 or WHERE `price` > :min_price)
$query = "
  SELECT `product`.*
  FROM `product`
  WHERE {$min_price_condition}
";
// prepare the substitutions (:min_price either null or the value of $min_price)
$substitutions = array(
 ':min_price' => $min_price
);
$result = db::execute($query, $substitutions);
var_dump($result->fetchAll());

?>


<?php $smarty->display('index.tpl'); ?>
W