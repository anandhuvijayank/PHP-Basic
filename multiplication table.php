<html>
Multiplication table
<?php
function mul($a){
	for($i=0;$i<10;$i++)
	{
		echo $i*$a;
		echo "<br>";
	}
}
print mul(3);// table of (3)
?>
</html>