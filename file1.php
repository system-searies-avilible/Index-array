<?php
//index array:

$color=array("red","green","blue","yellow");


echo$color[0]."<br>";
echo$color[1]."<br>";
echo$color[2]."<br>";
echo$color[3]."<br>";

echo"<br><br>";


$num=["red",20,"blue",40];
echo"<pre>";
print_r($num);
echo"</pre>";

echo"<br><br>";

$a=["red",22,"banana",55];
for($i=0; $i<4; $i++){
	echo $a[$i]."<br>";
}
?>