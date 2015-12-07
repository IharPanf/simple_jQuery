<?php
	$massEmail = ['test@mail.ru','admin@mail.ru','test@yandex.ru'];
	$curEmail  = $_POST['email'];
	
	function checkEmail($curEmail,$massEmail) {
		$flag = false;
		if (in_array($curEmail, $massEmail)) {
			echo " ";
			$flag = true;			
		} 
		return $flag;
	}
	
	checkEmail($curEmail,$massEmail);
?>