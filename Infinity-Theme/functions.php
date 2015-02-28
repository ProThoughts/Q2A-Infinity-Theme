<?php
/*
	don't allow this page to be requested directly from browser 
*/
	if (!defined('QA_VERSION')) {
			header('Location: /');
			exit;
	}
	
	
	function vardump($_var, $_label=null){
		echo '<pre>';
		if(!empty($_label)){
		  echo $_label . ': ';
		}
		var_dump($_var);
		echo '</pre>';
	}
/*
	Omit PHP closing tag to help avoid accidental output
*/