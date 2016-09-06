<?php
$number= "";

if(isset($_POST['submit']))
{
	$number=$_POST['number'];
	function checkDigit($number)
	{
		$odd_total=0;
		$even_total=0;
		for($i=0;$i<strlen($number);$i++)
		{
			if((($i+1)%2)==0)
			{
				$even_total +=$number[$i];
			}
			else
			{
				$odd_total +=$number[$i];
			}
		}
		$sum=(2* $even_total) + $odd_total;
		$check_digit=$sum%10;
		return ($check_digit > 0) ? 10 - $check_digit : $check_digit;
	}
	echo checkDigit($number);
	
}
?>

<form action="" method="post" enctype="multipart/form-data" name="form1">
  <label>Enter a Number<br>
  <input name="number" type="text" id="name">
  </label>
  <label><br>
  <input name="submit" type="submit" id="submit" value="Generate">
  </label>
</form>
