<?php
	$company_rel = array(
		1 => 'carbure.js',
		2 => 'orkestra.js'
	);
	
	if(isset($_GET['company_id'])){
		require_once('assets/data/'.$company_rel[$_GET['company_id']]);
		exit();
	}
?>