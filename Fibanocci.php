<html>

Fibanoci Number
<br>
<?php
function fiba($n){
$a=0;
$b=1;
echo $a;
echo $b;
for($i=2;$i<$n;$i++){
$c=$a+$b;
echo $c;
$a=$b;
$b=$c;
echo "<br>";
}
}
print fiba(10);
?>
Method 2<br>
<?php

define('NUM',11);
$a = 0;
$b = 1;

echo "$a $b "; // 0 1

for($i=1   ; $i<= NUM-2 ;  $a=$b, $b=$c, $i++ ) 
{
  echo $c = $a+$b;
  echo " ";
}

?>
</html>