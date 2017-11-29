<?php 

	class Result 
	{
		const FETCH_ARRAY = 0;
		const FETCH_ASSOC = 1;
		
		private $_result;

		public function __construct($db, $query) {

			$this->_result = mysqli_query($db, $query) or die(mysqli_error($db));
		}

		public function fetch() {
			return mysqli_fetch_array($this->_result);
		}

	}

?>
		