//
// Get database connection
//
function getDBConnection() {
	// get connection to local MySQL database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

