<html>
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
echo "<br>";

 $x = array(1, 7, 3, 4, 6);
 var_dump($x);
 echo "<br>";
 
 echo "<br>";
 unset($x[0]);//value 1 is deleted
 $x = array_values($x);
 echo '
';
var_dump($x);
?>
</html>