<html>
<head>
<title>
This is calculater
</title>
<body>

<form method="post">

Num1 = <input type="number" name="num1">
<br /><br />
Num2 = <input type="number" name="num2">
<br /><br />
Select operation = <select name="opration">
			<option value="add">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
			<option value="div">Division</option>
		</select> 
<br /><br />
<input type="submit" value="Submit" name="submit" />
</form>
<br /><br />
<div>
<?php
if(isset($_POST["submit"])){
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$operation = $_POST["opration"];
switch($operation){
 case 'add': echo $num1 + $num2;
 break;
 case 'sub': echo $num1 - $num2;
 break;
 case 'mul': echo $num1 * $num2;
 break;
 case 'div': echo $num1 / $num2;
 break;
 default: echo "Give proper number";
 break;
}

}

?>
</div>
</body>
</html>
