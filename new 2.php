<?php
$a=$_GET["a"];

if ($a==0)
{
	echo"desligue tudo <br>";
}
if ($a==1)
{
	echo "ligar TV <br>";
}
if ($a==2)
{
	echo "ligar radio <br>";
}
if ($a==3)
{ 
	echo "ligar a luz <br>";
}
if ($a > 3)
{
	echo "Valor invalido <br>";
}
?>