<?php
	
	/*
		This file would be replaced with the web service, obviously.
		The webservice will get the GET params, which it can use
		to authenticate, process the command, do the DB inserts, etc.
		Sample return data below.
	*/
	$_people_details=array(
		'fname'		=>	isset($_GET['fname']) ? $_GET['fname'] : 'null',
		'lname'		=>	isset($_GET['lname']) ? $_GET['lname'] : 'null',
		'email'	=>	isset($_GET['email']) ? $_GET['email'] : 'null',
		'phone'		=>	isset($_GET['phone']) ? $_GET['phone'] : 'null',
	);
	
	$_status=array(
		'status'	=>	1,	//or a 0 if the insert failed, perhaps a reason?
		'status_details'=>	'Successfully created people',
		'details'	=>	$_people_details,
	);
	
	/*
		Format:
		status		=>	1 or 0, success or fail.
		status_details,	=>	Reasons for failure, or success message (if desired).
		details		=>	array of the data passed, used when populating the Success or Fail page.
	*/
	
	echo json_encode($_status);

?>
