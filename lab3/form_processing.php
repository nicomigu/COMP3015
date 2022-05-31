<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Lab 3 Solution</title>
</head>

<body>
  <h1>Form Processing Exercise Solution</h1>
  <?php
	//a constant to measure the length of user's name
	const MINIMUM_NAME_LENGTH 	= 2;
	

	//compound statement, ensure all form fields exist

	//normalize data with trim()
	$username 	=  trim($_POST['username']);
	$password 	=  trim($_POST['password']);
	$studentNumber = trim($_POST['studentNumber']);
	$snPattern = "/[aA]0[0-9]{7}/";
	$languages = $_POST['languages'];
	$gender = $_POST['gender'];
	$errorMessages = "";


	if (isset($_POST['username']) == false  || trim($_POST['username']) == "") {
			/*
	if an error is detected, add (concatentate) to $errorMessages	 
	*/
			$errorMessages = 	$errorMessages . "<p>Please fill out the username field</p>";
		}

		if (isset($_POST['password']) == false   || trim($_POST['password']) == "") {
			/*
	if an error is detected, add (concatentate) to $errorMessages	 
	*/
			$errorMessages = 	$errorMessages . "<p>Please fill out the password field</p>";
		}
		if (isset($_POST['gender']) == false) {
			/*
	if an error is detected, add (concatentate) to $errorMessages	 
	*/
			$errorMessages = 	$errorMessages . "<p>Please fill out the gender</p>";
		}
	//apply any other rules we wish...
	if (
		strlen($username) < MINIMUM_NAME_LENGTH
	) {
		$errorMessages = $errorMessages . "<p>Username should be at least 2 characters.</p>";
	}

	if(!preg_match($snPattern, $studentNumber)){
		$errorMessages = $errorMessages . "<p>Student Number should be A0nnnnnnn pattern.</p>";
	}

	if ($errorMessages != "") {
		/*
if a problem is detected, forward the user 
back to the form, and send the error message(s)
as a GET query string
*/
		$encodedMessages = urlencode($errorMessages);
		header("Location: form_with_errors.php?errors=" . $encodedMessages);
	}

	if($gender == "male"){
		echo "<p>Hello Mr. " . $username . "</p>";
	}
	elseif($gender == "female"){
		echo "<p>Hello Ms. " . $username . "</p>";
	}

	if(count($languages) == 0 ){
		echo "<p>You are not studying any computer languages(s)</p>";
	}
	elseif(count($languages) == 1){
		displayLanguages($languages);
	}
  elseif(count($languages) >= 5){
		displayLanguages($languages);
		echo "<p>Impressive. You have been studying quite a few computing languages. </p>";
	}
	else{
		displayLanguages($languages);
		echo "<p>You are multilingual.</p>";
	}

	function displayLanguages($languages){
		foreach($languages as $language){
			echo "<p> You are studying " . $language . "</p>";
		}
	}
	?>
</body>

</html>