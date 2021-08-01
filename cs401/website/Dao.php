<?php

class Dao {

	/* Local Host credentials
	   private $host = "localhost";
	   private $db = "demo";
	   private $user = "root";
	   private $pass = "root";

	 */ 

	/*Heroku Credentials */
	private $host = "us-cdbr-iron-east-05.cleardb.net";
	private $user = "bc89e671fb27a0";
	private $pass = "a662cfa4";
	private $db = "heroku_6614eaaaffa06d5";

	public function getConnection(){
		try {
			$conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->pass);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo "connection successful";
			return $conn;
		} catch (Exception $e) {
			echo "connection failed: " . $e->getMessage();
		}
	}
	/**
	 * Returns the database connection status string.
	 */

	public function getConnectionStatus()
	{
		$conn = $this->getConnection();
		return $conn->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
	}

	public function checkUserExists($email){
		$conn = $this->getConnection();

		$query = "SELECT user_email FROM user WHERE user_email = :user_email";
		$query = $conn->prepare($query);
		$query->bindParam(":user_email", $email);
		$query->execute();
		$result = $query->fetchAll();
		return reset($result);
	}

	public function checkUserAndPassword($email, $password){
		$conn = $this->getConnection();
		$password = hash("sha256", $password . "fKd93Vmz!k*dAv5029Vkf9$3Aa");
		$queryStm = "SELECT user_email, user_password FROM user WHERE user_email = :user_email AND user_password = :user_password";
		$query = $conn->prepare($queryStm);
		$query->bindParam(":user_email", $email);
		$query->bindParam(":user_password", $password);
		$query->execute();
		$result = $query->fetchAll();
		return reset($result);
	}

	public function updatePassword($email, $password){
		$conn = $this->getConnection();
		$query = "UPDATE user SET user_password = :user_password WHERE user_email = :user_email";

		$password = hash("sha256", $password . "fKd93Vmz!k*dAv5029Vkf9$3Aa");

		$query = $conn->prepare($query);
		$query->bindParam(":user_password", $password);
		$query->bindParam(":user_email", $email);
		$query->execute();

	}
}



/* Database credentials. Assuming you are running MySQL
   server with default setting (user 'root' with no password) */

/*
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_NAME', 'demo');
 */

/*Heroku Credentials */
//define('DB_SERVER', 'us-cdbr-iron-east-05.cleardb.net');
//define('DB_USERNAME', 'bc89e671fb27a0');
//define('DB_PASSWORD', 'a662cfa4');
//define('DB_NAME', 'heroku_6614eaaaffa06d5');

/* Attempt to connect to MySQL database */
/*
   try{
   $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
// Set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
die("ERROR: Could not connect. " . $e->getMessage());
}
 */

?>
