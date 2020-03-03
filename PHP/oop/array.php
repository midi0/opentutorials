<h1>Function Style</h1>
<?php
$adata = array('a','b','c');
array_push($adata, 'd');
foreach ($adata as $item) {
  echo $item.'<br>';
}
var_dump(count($adata));
?>

<h1>Object Style</h1>
<?php
$adata2 = new ArrayObject(array('a','b','c'));
$adata2->append('d');
foreach ($adata2 as $item) {
  echo $item.'<br>';
}
var_dump($adata2->count());
?>
