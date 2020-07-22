<!DOCTYPE html>
<html>
<body>
<h2>
<?php 
	//include functions
	require_once("functions.php");
	//check the fullname is existed in requests
	if(strlen($_POST["ffname"]) == 0 || strlen($_POST["sfname"]) == 0){
		echo "Please input fullnames to be compared.";
	}else{
		//get fullnames
		$ffnameStr = $_POST["ffname"];
		$sfnameStr = $_POST["sfname"];
		$isValid = compareFullnames($ffnameStr, $sfnameStr);
	}
	
?>
</h2>

<form method="post">
  <label for="ffname">First full name:</label><br>
  <input type="text" id="ffname" name="ffname"><br>
  <label for="sfname">Second full name:</label><br>
  <input type="text" id="sfname" name="sfname"><br><br>
  <input type="submit" value="Submit">
</form>

<p><?php echo $_POST["ffname"] ?></p>

</body>
</html>