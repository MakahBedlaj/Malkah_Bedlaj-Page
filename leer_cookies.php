<?php

	if (isset($_COOKIE["advertencia"])) {
		echo $_COOKIE["advertencia"];
	}else{
		echo "No aparece la cookie";
	}
	
?>