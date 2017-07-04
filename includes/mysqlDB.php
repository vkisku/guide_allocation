<?PHP 
	class mysqlDB {
		private $servername;
		private $username;
		private $password;
		private $error=array();
		
		private $conn;
		function __construct($servername,$username,$password){
			$this->servername=$servername;
			$this->username=$username;
			$this->password=$password;
		}
		function connection_open(){
			$this->conn=new mysqli($this->servername,$this->username,$this->password);
			if(!$this->conn)
				$this->error['db_error']="Connection Failed!";
			else $this->error['success']="Connection Successful";
		}
		function connection_close(){
			
			mysqli_close($this->conn);
		}
		function get_error(){
			return $this->error;
		}
	}
?>