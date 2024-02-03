<?PHP
		$servername = "localhost";
		$username = "root";
		$password = "";
		$conn = new mysqli($servername, $username, $password);
		
		if ($conn->connect_error) {
				die("CONNECTION FAILED: " . $conn->connect_error);
			}	
		
		$sql = "CREATE DATABASE customer";
		
		if ($conn->query($sql) === TRUE) {
			echo  "DATABASE CREATED SUCCESSFULLY";
		} else {
			echo "ERROR CREATING DATABASE: " . $conn->error;
		}		
		$conn->close();
?>
