<html>
<?php
$color = array('white', 'green', 'red','black');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<ol>$y</ol>";
}
echo "</ul>";

rsort($color)

?>
</html>