//
// check if credentials passed are in db
//
function checkCreds($conn, $email, $password) {
	$sql = "SELECT id FROM users";
		$sql = $sql . " where email='" . $email . "' AND password='" . $password . "';";
	$result = mysqli_query($conn, $sql);

	// if the query returns only one result, email and password are OK
	if (mysqli_num_rows($result) == 1) {
		$status = True;
	} else {
		$status = False;
	}

	// Close the connection 
	mysqli_close($conn);
	return $status;	
}

//
// Process bad login
//
function processBadLogin() {
	$_SESSION["status"] = "NotLoggedIn";
	$_SESSION['login_error_msg'] = "Sorry, that user name or password is incorrect. Please try again.";
	header("Location: index.php");
	exit();		
}

