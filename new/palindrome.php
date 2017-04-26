<form method="POST">
	Enter Number: <input type="text" name="num"><br>
	<button type="submit">Check</button>
</form>
<?php
	if($_POST)
	{
		$num=$_POST['num'];
		$reverse=strrev($num);

		if($num== $reverse)
		{
			echo "The number $num is palindrome";
		}
		else
		{
			echo"The number is not palindrome";
		}
	}
?>