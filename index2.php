<?php

if (isset($_POST["lessons"])){
	$var=$_POST["lessons"];
}
else{
	$var=array("tony","ebuka","smart","nonso");
}

$var2=5;
$var3="<html>
<head>

</head>
<body>
<h1>hello from creativeonlineschool.com</h1>

<form action='http://localhost/lessons/index2.php' method='POST'>
<input type='text' name='name'>Your Name</input> <br />
<b>What lessons do you want to learn?</b><br>
<select name='lessons[]' size='4' multiple>
<option value='mysql'>MY SQL</option>
<option value='web dev'>Web Development</option>
<option value='oracle'>Oracle</option>
<option value='javascript'>Javascript</option>
</select>
<input type='submit'  value='submit'>
</form>
</body>

</html>";

//array_push($var, "billy");
//$var[2]="Fresh";

foreach($var as $index)
{
	echo $index;
	echo "<br>";
}


//print_r ($var);
echo $var3;




?>

