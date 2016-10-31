{include file="header.tpl"}
<h1>Productlist suckers</h1>

<ul>
{foreach $products as $id => $product}
  <li><a href="product.php?id={$id}">{$product.name}</a> is {$product.color}</li>
{/foreach}
</ul>

{include file="footer.tpl"}
