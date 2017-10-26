<?php
	function cast() {
		echo '<pre>';

		foreach(func_get_arg() as $var) {	
			var_dump($var);
		}

		echo '</pre>';
	}
?>