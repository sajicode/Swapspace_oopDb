<?php 

	class DBConn {
		private $_dbname;
		private $_dbuser;
		private $_dbpassword;
		private $_dbhost;
		private $_result;
		private $_dbconn;

		

		
		public function __construct() {

			include ('db_config.php');
			extract($config);

			 $this->_dbconn = mysqli_connect($host, $user, $password, $dbname) or die(mysqli_error($this->_dbconn));
		}

		public function query($stmt) {
			$this->_result = new Result($this->_dbconn, $stmt);
			return $this->_result;
		}



		
    }
    
?>
