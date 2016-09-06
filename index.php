
<?php
$name="";
$bankgroup= "";
$digit="";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$bankgroup=$_POST['bankgroup'];

	$number=$bankgroup.$_POST['number'];
	
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
	//echo checkDigit($number);
	$digit=checkDigit($number);
	echo "Your Account Name is: "."<b>".$name."</b>";
	echo "<br/>";
	echo "Your Account Number is :" ."<b>".$number.$digit."</b>";
	echo "<br/>";
	//echo $digit;
}
?>
<a href="calculator.php">Calculate the Check Digit</a>
<form action="" method="post" enctype="multipart/form-data" name="form1">
  <label>Name <br>
  <input name="name" type="text" id="name">
  </label>
  <label><br>
  <br>
  Bank Group<br>
  <select name="bankgroup" id="bankgroup">
    <option value="0">Select</option>
    <option value="1">Nordea Bank (Nordea)</option>
	<option value="31">Handelsbanken (SHB)</option>
	<option value="33">Skandinaviska Enskilda Banken (SEB)</option>
	<option value="34">Danske Bank</option>
	<option value="36">Tapiola Bank (Tapiola)</option>
	<option value="37">DnB NOR Bank ASA (DnB NOR)</option>
	<option value="38">Swedbank</option>
	<option value="39">S-Bank</option>
	<option value="4">savings banks (Sp) and local cooperative banks (Pop) and Aktia</option>
	<option value="5">cooperative banks (Op), OKO Bank and Okobank</option>
	<option value="6">Ålandsbanken ÅAB)</option>
	<option value="8">Sampo Bank (Sampo)</option>
  </select>
  </label>  <label><br>
  <br>
  <label>Enter a Number<br>
  <input name="number" type="text" id="name">
  </label>
  <label><br>
  <input name="submit" type="submit" id="submit" value="Generate">
  </label>
  </br>
  <label>Check digit<br>
  <input name="digit" type="text" id="digit" value=<?php echo $digit;?>>
  </label>
  <br>
  <label>
  <input name="submit" type="submit" id="submit" value="Submit">
  </label>
</form>
