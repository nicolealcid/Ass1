<?php
	echo '<h1>Calculator</h1>';
	echo 'Enter number: ';
	echo "<br>";
?>
<form action= "" method="post">
	<input type="text" name="n1" value =""><br>
		Enter second number:
		 <br>
	<input type="text" name="n2" value =""><br>
	<input type="submit" name="a" value =" + ">
	<input type="submit" name="s" value =" - ">
	<input type="submit" name="m" value =" * ">
	<input type="submit" name="d" value =" / ">
</form>
<?php
if(isset($_POST['a'])) 
{
	$n1 = $_POST['n1']; 
	$n2 = $_POST['n2']; 
	$add = $n1+$n2; 
	echo "Sum = ".$add; 
}

if(isset($_POST['s']))
{
	$n1 = $_POST['n1']; 
	$n2 = $_POST['n2']; 
	$s= $n1-$n2; 
	echo "Difference = ".$s; 
}

if(isset($_POST['m'])) 
{
	$n1 = $_POST['n1']; 
	$n2 = $_POST['n2']; 
	$m = $n1*$n2; 
	echo "Product = ".$m; 
}

if(isset($_POST['d'])) 
{
	$n1 = $_POST['n1']; 
	$n2 = $_POST['n2']; 
	$d = $n1/$n2; 
	echo "Quotient =  ".$d; 
}
?>