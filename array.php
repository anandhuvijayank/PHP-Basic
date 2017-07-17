<html>
fact
<?php
function fact($x){
	$fact=1;
	$num=$x;
for($i=$num;$i>=1;$i--)
{
	$fact=$fact*$i;
}
echo $fact;
}

print fact(5)
?>
</html>