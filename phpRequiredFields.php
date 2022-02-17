<!DOCTYPE HTML>
<html>
<head>
<body>
<style>

.error
{
	color: #FF0000;
}
</style>
</head>

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"
{
	if(empty($_POST["name"]))
	{
		$nameErr = "Name is required";
	}
	else
	{
		$name = test_input($_POST["name"]);
	}
	
	if(empty($_POST["email"]))
	{
		$emailErr = "Email is required";
	}
	else
	{
		$email = test_input($_POST["email"]);
	}
	
	if(empty($_POST["website"]))
	{
		$websiteErr = "";
	}
	else
	{
		$website = test_input($_POST["website"]);
	}
	
	if(empty($_POST["gender"]))
	{
		$genderErr = "Gender is required";
	}
	else
	{
		$gender = test_input($_POST["gender"]);
	}
	
	if(empty($_POST["comment"]))
	{
		$commentErr = "";
	}
	else
	{
		$comment = test_input($_POST["comment"]);
	}
}

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2>PHP Form Example of Required Fields </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</body>
</html>
